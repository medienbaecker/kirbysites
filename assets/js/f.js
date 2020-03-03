var pswpElement = document.querySelectorAll('.pswp')[0];

document.querySelectorAll(".website").forEach(function(website) {

    website.querySelector(".screenshot").addEventListener('click', function(e) {
        website.querySelector(".screenshot").classList.add('backend_open');
        setTimeout(function () {
            var index = 0;
            var items = [];
            website.querySelectorAll("img.popup").forEach(function(img) {
                var item = {
                    src  : img.src,
                    w    : img.getAttribute("data-size").split("x")[0],
                    h    : img.getAttribute("data-size").split("x")[1],
                    msrc : img.src,
                    el   : img,
                    title: website.querySelector('.title .frontend').outerHTML
                }
                items.push(item);
            });
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
            gallery.listen('destroy', function() {
                website.querySelector(".screenshot").classList.remove('backend_open');
            });
        }, 200);
        e.preventDefault();
    });

    website.querySelector(".heart").addEventListener('click', function(e) {
        fetch(this.getAttribute('href'), {
            method: 'POST'
        })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            this.querySelector("span").innerText = data.likeCount;
            if(data.hasLiked) {
                this.classList.add('has_liked');
            }
            else {
                this.classList.remove('has_liked');
            }
        });
        e.preventDefault();
    });

});