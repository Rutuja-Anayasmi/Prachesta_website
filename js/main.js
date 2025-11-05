// ==================== SLIDER FUNCTION ====================
document.addEventListener("DOMContentLoaded", function () {

    let currentIndex = 0;

    function showSlide(index) {
        let slider = document.querySelector(".banner-slider");
        let slides = document.querySelectorAll(".banner-slide");

        if (!slider || slides.length === 0) {
            console.error("Slider elements not found!");
            return;
        }

        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }

        slider.style.transform = "translateX(" + (-currentIndex * 100) + "%)";
    }

    function nextSlide() {
        //  console.log("Next slide triggered");
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    // Attach button click events
    document.querySelector(".prev-slide").addEventListener("click", prevSlide);
    document.querySelector(".next-slide").addEventListener("click", nextSlide);

    // Auto-slide every 5 seconds
    // setInterval(nextSlide, 5000);

    // OPTIONAL: Razorpay dynamic script handler
    const donateButton = document.getElementById("donateBtn");
    if (donateButton) {
        donateButton.addEventListener("click", function (event) {
            event.preventDefault();
            const script = document.createElement("script");
            script.src = "https://checkout.razorpay.com/v1/payment-button.js";
            script.setAttribute("data-payment_button_id", "pl_FR1fOi1ew0Qjjm");
            script.async = true;
            document.body.appendChild(script);
        });
    }


    // ==================== TRUSTEES SOCIAL MEDIA FUNCTION ====================
    let socialLinks = document.querySelectorAll(".social-link");

    socialLinks.forEach(link => {
        let platform = link.getAttribute("data-platform");

        if (platform === "facebook") {
            link.href = "https://www.facebook.com";
            link.innerHTML = "📘 Facebook";
        } else if (platform === "twitter") {
            link.href = "https://www.twitter.com";
            link.innerHTML = "🐦 Twitter";
        } else if (platform === "linkedin") {
            link.href = "https://www.linkedin.com";
            link.innerHTML = "🔗 LinkedIn";
        }
    });

});

// ==================== UPCOMING EVENTS ====================
document.addEventListener("DOMContentLoaded", function () {
    $(".event-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1024: { items: 2 }
        }
    });
});




// ==================== GALLERY ====================
document.addEventListener("DOMContentLoaded", function () {
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const backBtn = document.getElementById("backBtn");
    const hiddenImagesContainer = document.getElementById("hidden-images");

    loadMoreBtn.addEventListener("click", function () {
        hiddenImagesContainer.style.display = "flex";
        loadMoreBtn.style.display = "none";
        backBtn.style.display = "inline-block";
    });

    backBtn.addEventListener("click", function () {
        hiddenImagesContainer.style.display = "none";
        loadMoreBtn.style.display = "inline-block";
        backBtn.style.display = "none";
    });
});




// ====================CONTACT ====================

(document).ready(function () {
    $("#contact-form").submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "contact.php",
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.status === 1) {
                    $("#form-status").html('<p class="text-success">' + response.msg + '</p>');
                    $("#contact-form")[0].reset();
                } else {
                    $("#form-status").html('<p class="text-danger">' + response.msg + '</p>');
                }
            },
            error: function () {
                $("#form-status").html('<p class="text-danger">Error sending email. Please try again.</p>');
            }
        });
    });
});


// ====================CONTACT ====================

function initMap() {
    var location = { lat: 19.1360, lng: 72.9966 };
    var map = new google.maps.Map(document.getElementById("map_canvas"), {
        zoom: 15,
        center: location
    });

    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
var script = document.createElement("script");
script.src = "https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap";
script.async = true;
script.defer = true;
document.head.appendChild(script);

// ====================READ MORE ====================
function toggleText() {
    var moreText = document.getElementById("more-text");
    var btnText = document.getElementById("read-more");

    if (moreText.style.display === "none") {
        moreText.style.display = "inline";
        btnText.innerHTML = " Read less";
    } else {
        moreText.style.display = "none";
        btnText.innerHTML = "... Read more";
    }
}