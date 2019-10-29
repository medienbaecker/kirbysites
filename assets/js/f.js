var pswpElement = document.querySelectorAll('.pswp')[0];

document.querySelectorAll(".website").forEach(function(website) {

    website.querySelector(".title").addEventListener('click', function() {
        website.classList.toggle('backend-open');
    });

    website.querySelector("a.backend").addEventListener('click', function(e) {
        e.preventDefault();
        var index = 0;
        var items = [];
        website.querySelectorAll("img.popup").forEach(function(img) {
            var item = {
                src  : img.src,
                w    : img.getAttribute("data-size").split("x")[0],
                h    : img.getAttribute("data-size").split("x")[1],
                msrc : img.src,
                el   : img
            }
            items.push(item);
        });
        console.log(items);
        var options = {
            index: index,
            bgOpacity: 0.9,
            showHideOpacity: true,
            fullscreenEl: false,
            zoomEl: false,
            shareEl: false,
            history: false,
            preload: [2,2],
            getThumbBoundsFn: function(index) {
                var pageYScroll = window.pageYOffset || document.documentElement.scrollTop; 
                var rect = website.getBoundingClientRect(); 
                return {x:rect.left,y:rect.top + pageYScroll, w:rect.width};
            }
        }
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    });

});