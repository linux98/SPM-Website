// =========================================================================
// SPM SAKON NAKHON SMART PORTAL - SERVICE WORKER (PWA ENGINE)
// =========================================================================
const CACHE_NAME = 'spm-sakon-cache-v1.0';
const STATIC_ASSETS = [
  './',
  'manifest.json',
  'assets/kram/logo-spm.png',
  'assets/kram/logo-spm.svg',
  'assets/kram/favicon.ico'
];

// Install: Cache essential shell assets
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(STATIC_ASSETS).catch((err) => {
        console.warn('[SPM SW] Some assets could not be precached:', err);
      });
    })
  );
  self.skipWaiting();
});

// Activate: Cleanup older caches
self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) => {
      return Promise.all(
        keys.map((key) => {
          if (key !== CACHE_NAME) {
            return caches.delete(key);
          }
        })
      );
    })
  );
  self.clients.claim();
});

// Fetch: Stale-While-Revalidate for static assets, Network-First for REST API
self.addEventListener('fetch', (event) => {
  const url = new URL(event.request.url);

  // Skip non-GET requests
  if (event.request.method !== 'GET') return;

  // 1. Dynamic REST API calls: Network-First with Cache Fallback
  if (url.searchParams.has('rest_route') || url.pathname.includes('/wp-json/')) {
    event.respondWith(
      fetch(event.request)
        .then((response) => {
          if (response && response.status === 200) {
            const respClone = response.clone();
            caches.open(CACHE_NAME).then((cache) => {
              cache.put(event.request, respClone);
            });
          }
          return response;
        })
        .catch(() => caches.match(event.request))
    );
    return;
  }

  // 2. Static CDN / Local Assets: Cache-First with Network Revalidate
  if (
    url.hostname.includes('cdn.jsdelivr.net') ||
    url.hostname.includes('fonts.googleapis.com') ||
    url.hostname.includes('fonts.gstatic.com') ||
    url.hostname.includes('cdnjs.cloudflare.com') ||
    url.pathname.includes('/assets/')
  ) {
    event.respondWith(
      caches.match(event.request).then((cachedResponse) => {
        if (cachedResponse) {
          // Revalidate in background
          fetch(event.request)
            .then((networkResponse) => {
              if (networkResponse && networkResponse.status === 200) {
                caches.open(CACHE_NAME).then((cache) => {
                  cache.put(event.request, networkResponse);
                });
              }
            })
            .catch(() => {});
          return cachedResponse;
        }
        return fetch(event.request);
      })
    );
    return;
  }

  // 3. Default Network-First
  event.respondWith(
    fetch(event.request).catch(() => caches.match(event.request))
  );
});
