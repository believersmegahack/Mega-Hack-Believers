const staticCache = 'staticCache';
const dynamicCache ='dynamicCache';
const assets = [
    '/offline',
    '/',
    '/argon/vendor/nucleo/css/nucleo.css',
    '/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css',
    '/argon/css/argon.css?v=1.0.0',
    '/argon/vendor/jquery/dist/jquery.min.js',
    '/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
    '/argon/js/argon.js?v=1.0.0',
    '/js/app.js',
    '/manifest.json',
    '/argon/vendor/nucleo/fonts/nucleo-icons.ttf',
    '/argon/vendor/nucleo/fonts/nucleo-icons.woff2',
    '/argon/vendor/nucleo/fonts/nucleo-icons.woff',
    '/argon/img/brand/favicon.png',
    '/media'

];

self.addEventListener('install',evt => {
    evt.waitUntil(
        caches.open(staticCache).then(cache => {
        cache.addAll(assets);
        })
    );
    console.log(assets);
});

self.addEventListener('activate',evt => {
    evt.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(keys
                .filter(key => key !== staticCache && key !== dynamicCache)
                .map(key => caches.delete(key))
            )
        })
    );
});

//sem manter cache dinamico por ora
self.addEventListener('fetch',evt => {
    evt.respondWith(
        caches.match(evt.request).then(cacheRes  => {
            return cacheRes || fetch(evt.request).then(fetchRes => {
                //return caches.open(dynamicCache).then(cache => {
                    // if(evt.request.url.indexOf('/login') == -1 && evt.request.url.indexOf('/logout') == -1 ){
                    //     cache.put(evt.request.url,fetchRes.clone());
                    //     //console.log('url',evt.request.url);
                    // }
                    return fetchRes;
                //})
            }).catch( ()=> { 
                return caches.match('/offline');
            })
        })
    )
});