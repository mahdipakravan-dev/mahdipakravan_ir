/* Template Name: MahdiPakravan - Tailwind CSS Personal Portfolio Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 1.0.0
   Created: March 2022
   File Description: Main JS file of the template
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Preloader            *
 *     02.  Menus                *
 *     03.  Back to top          *
 ================================*/
window.WEBSITE_URL = "https://mahdipakravan.ir"
 window.addEventListener('load', fn, false)

 //  window.onload = function loader() {
 function fn() {
     // Preloader
     if (document.getElementById('preloader')) {
         setTimeout(() => {
             document.getElementById('preloader').style.visibility = 'hidden';
             document.getElementById('preloader').style.opacity = '0';
         }, 350);
     }
 }
/*********************/
/*     Menus         */
/*********************/

function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add("is-sticky");
    } else {
        navbar.classList.remove("is-sticky");
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})

// Navbar Active Class
try {
    var spy = new Gumshoe('#navbar-navlist a', {
        // Active classes
        // navClass: 'active', // applied to the nav list item
        // contentClass: 'active', // applied to the content
        offset: 80
    });
} catch (error) {
    
}


// Smooth scroll 
try {
    var scroll = new SmoothScroll('#navbar-navlist a', {
        speed: 800,
        offset: 80
    });
} catch (error) {
    
}

// Menu Collapse
const toggleCollapse = (elementId, show = true) => {
    const collapseEl = document.getElementById(elementId);
    if (show) {
        collapseEl.classList.remove('hidden');
    } else {
        collapseEl.classList.add('hidden');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Toggle target elements using [data-collapse]
    document.querySelectorAll('[data-collapse]').forEach(function (collapseToggleEl) {
        var collapseId = collapseToggleEl.getAttribute('data-collapse');

        collapseToggleEl.addEventListener('click', function () {
            toggleCollapse(collapseId, document.getElementById(collapseId).classList.contains('hidden'));
        });
    });
});

window.toggleCollapse = toggleCollapse;

/*********************/
/*    Back To TOp    */
/*********************/

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var mybutton = document.getElementById("back-to-top");
    if(mybutton!=null){
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.classList.add("block");
            mybutton.classList.remove("hidden");
        } else {
            mybutton.classList.add("hidden");
            mybutton.classList.remove("block");
        }
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*********************/
/* Dark & Light Mode */
/*********************/
try {
    function changeTheme(e){
        e.preventDefault()
        const htmlTag = document.getElementsByTagName("html")[0]
        
        if (htmlTag.className.includes("dark")) {
            htmlTag.className = 'light'
        } else {
            htmlTag.className = 'dark'
        }
    }

    const switcher = document.getElementById("theme-mode")
    switcher?.addEventListener("click" ,changeTheme )
    
    const chk = document.getElementById('chk');

    chk.addEventListener('change',changeTheme);
} catch (err) {
    
}


/*********************/
/* LTR & RTL Mode */
/*********************/
try{
    const htmlTag = document.getElementsByTagName("html")[0]
    function changeLayout(e){
        e.preventDefault()
        const switcherRtl = document.getElementById("switchRtl")
        if(switcherRtl.innerText === "LTR"){
            htmlTag.dir = "ltr"
        }
        else{
            htmlTag.dir = "rtl"
        }
        
    }
    const switcherRtl = document.getElementById("switchRtl")
    switcherRtl?.addEventListener("click" ,changeLayout )
}
catch(err){}

/*********************/
/*   Feather Icons   */
/*********************/
feather.replace();

/*********************/
/*  Active Sidebar   */
/*********************/
(function () {
    var current = location.pathname.substring(location.pathname.lastIndexOf('/') + 1);;
    if (current === "") return;
    var menuItems = document.querySelectorAll('.sidebar-nav a');
    for (var i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].parentElement.className += " active";
        }
    }
})();

/*********************/
/*  Contact js   */
/*********************/

try {
    // Contact Form
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var email = document.forms["myForm"]["email"].value;
        var subject = document.forms["myForm"]["subject"].value;
        var comments = document.forms["myForm"]["comments"].value;
        document.getElementById("error-msg").style.opacity = 0;
        document.getElementById('error-msg').innerHTML = "";
        if (name == "" || name == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا نام خود را وارد کنید*</div>";
            fadeIn();
            return false;
        }
        if (email == "" || email == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا آدرس ایمیل خود را وارد کنید*</div>";
            fadeIn();
            return false;
        }
        if (subject == "" || subject == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا موضوع پیغام را وارد کنید*</div>";
            fadeIn();
            return false;
        }
        if (comments == "" || comments == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا پیغام خود را وارد کنید*</div>";
            fadeIn();
            return false;
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("simple-msg").innerHTML = this.responseText;
                document.forms["myForm"]["name"].value = "";
                document.forms["myForm"]["email"].value = "";
                document.forms["myForm"]["subject"].value = "";
                document.forms["myForm"]["comments"].value = "";
            }
        };
        xhttp.open("POST", "php/contact.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&comments=" + comments);
        return false;
    }

    function fadeIn() {
        var fade = document.getElementById("error-msg");
        var opacity = 0;
        var intervalID = setInterval(function () {
            if (opacity < 1) {
                opacity = opacity + 0.5
                fade.style.opacity = opacity;
            } else {
                clearInterval(intervalID);
            }
        }, 200);
    }
} catch (error) {
    
}

/*********************/
/*      WoW Js       */
/*********************/
try {
    new WOW().init();
} catch (error) {
    
}

window.posts = [];
window.booklets = [
    { title: 'جزوات درس هوش مصنوعی', category: 'جزوات', imageUrl: 'assets/images/booklet/3.png', link: WEBSITE_URL + '/booklet/ai.html' },
    { title: 'جزوات درس نصب و راه اندازی شبکه', category: 'جزوات', imageUrl: 'assets/images/booklet/4.png', link: WEBSITE_URL + '/booklet/network.html' },
    { title: 'جزوات درس پردازش تصویر', category: 'جزوات', imageUrl: 'assets/images/booklet/8.png', link: WEBSITE_URL + '/booklet/improcess.html' },
    { title: 'جزوات درس پایگاه داده', category: 'جزوات', imageUrl: 'assets/images/booklet/7.png', link: WEBSITE_URL + '/booklet/dbmanagement.html' },
];

window.renderGrid = (elementId , items) => {
    const postContainer = document.getElementById(elementId);
    const postContainerEmpty = document.getElementById(elementId + "_empty");

    if(!items.length) {
        postContainer.classList.add("hidden")
        postContainerEmpty.classList.remove("hidden")
        return;
    }
    items.forEach(postData => {
        // Create the main post container
        const postDiv = document.createElement('div');
        postDiv.className = 'relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800';

        // Create the post image
        const image = document.createElement('img');
        image.src = postData.imageUrl;
        postDiv.appendChild(image);

        // Create the gradient overlay
        const gradientOverlay = document.createElement('div');
        gradientOverlay.className = 'absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500';
        postDiv.appendChild(gradientOverlay);

        // Create the post details
        const detailsDiv = document.createElement('div');
        detailsDiv.className = 'absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500';

        // Create the post title
        const titleLink = document.createElement('a');
        titleLink.href = postData.link; // You can set the link here
        titleLink.className = 'text-white hover:text-amber-500 font-semibold transition-all duration-500';
        titleLink.textContent = postData.title;
        detailsDiv.appendChild(titleLink);

        // Create the post category
        const categorySpan = document.createElement('span');
        categorySpan.className = 'block text-sm text-slate-400';
        categorySpan.textContent = postData.category;
        detailsDiv.appendChild(categorySpan);

        postDiv.appendChild(detailsDiv);

        // Append the post to the container
        postContainer.appendChild(postDiv);
    });
}