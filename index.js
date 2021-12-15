<script >

    var myCollapseEl = document.getElementById('myCollapse')

    myCollapseEl.addEventListener('shown.bs.collapse', function (event) {
    // Action to execute once the collapsible area is expanded
    })

    var myCarouselEl = document.getElementById('myCarousel')
    var carousel = bootstrap.Carousel.getInstance(myCarouselEl) // Retrieve a Carousel instance

    myCarouselEl.addEventListener('slid.bs.carousel', function (event) {
    carousel.to('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
    })

    carousel.to('1') // Will start sliding to the slide 1 and returns to the caller
    carousel.to('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!

    $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".navbar")
            .css({"padding" : "5px"});   
        }
        else{
            $(".navbar")
            .css({"padding" : "5px"});
        }

    })
})
</script >