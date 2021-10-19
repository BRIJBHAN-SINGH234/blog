<x-header/>
<!DOCTYPE html>

<html?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
	<style>
        
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit
}
article,
aside,
details,
figcaption,
figure,
footer,

hgroup,

section {
    display: block
}
body {
    line-height: 1
}
ol,
ul {
    list-style: none
}
blockquote,
q {
    quotes: none
}
blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none
}
table {
    border-collapse: collapse;
    border-spacing: 0
}
body {
    background-color: #1b1f23;
    font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-weight: normal;
    font-size: 15px;
    text-transform: none;
    color: #363636;
    line-height: 1.8em
}
#content_wrapper {
    background-color: #ffffff
}
::-moz-selection {
    background-color: #000;
    color: #fff
}
::selection {
    background: #FFF7B6;
    color: black
}
abbr {
    border-bottom: 1px dotted #b8c6c6
}
h1,
h2,
h3,
h4,
h5,
h6,
.collection_title,
.headline,
p.subtitle,
.footer_menu a,
.empty_cart,
.promo_banner {
    font-family: "Nunito";
    font-weight: normal;
    font-style: normal;
    text-transform: uppercase;
    color: #363636;
    display: block;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
.collection_title {
    font-weight: inherit
}
h1 a,
h1 a:visited,
.collection_title a,
.collection_title a:visited {
    color: #363636
}
h1 a:hover,
h1 a:active,
.collection_title a:hover,
.collection_title a:active {
    color: #786d9c
}
h1,
.h1,
h1.home,
h2.title,
.collection_title,
h3.title {
    font-size: 25px;
    line-height: 1.25em;
    margin: 0 auto 15px;
    clear: both;
    font-weight: normal;
    padding-top: 4px
}
h1.product_name {
    margin-bottom: 15px
}
h2.product_name a {
    color: #363636
}
h2,
.h2 {
    font-size: 22px;
    margin-bottom: 0.75em;
    line-height: 1.5em
}
h3,
.h3,
h1.blog_title {
    font-size: 20px;
    line-height: 35px;
    margin: 0 auto 15px 0
}
h1.collection_title,
div.collection_title {
    margin-bottom: 0;
    line-height: 25px;
    display: inline
}
h1.collection_title_tags,
div.collection_title_tags {
    padding-right: 25px;
    border-right: solid 1px #b8c6c6
}
h4,
.h4,
h4.title a,
h6.title {
    font-size: 18px;
    line-height: 32px;
    margin: 0 0 1em 0;
    padding: 0;
    padding: 7px 0;
    color: #363636
}
h4.title a {
    border: 0;
    padding: 0;
    margin: 0
}
h5,
.h5 {
    font-size: 18px;
    padding-bottom: 1em
}
h5.sub_title {
    padding-bottom: 5px
}
h6,
.h6,
h6.title,
ul.footer_menu a,
ul.footer_menu a:visited {
    font-size: 16px;
    letter-spacing: 1px
}
.subheader {
    color: #777
}
p {
    margin: 0 0 15px;
    font-style: normal;
    line-height: 1.8em
}
p img {
    margin: 0
}
em,
i {
    font-style: italic
}
strong,
b {
    font-weight: bold
}
small {
    font-size: 90%
}
.feature img {
    position: relative;
    top: 7px;
    margin-right: 5px;
    width: 25px;
    height: 25px
}
.feature p {
    font-size: smaller
}
#featured_links {
    padding: 20px 0
}
#featured_links h2 {
    padding-top: 15px
}
.feature_divider {
    border: solid 2px;
    display: block;
    width: 70px;
    margin: 25px auto;
    border-color: #363636
}
.content1 h2,
.content2 h2,
.content3 h2 {
    margin-bottom: 0
}
blockquote,
blockquote p {
    font-size: 17px;
    line-height: 24px;
    font-style: italic
}
blockquote {
    margin: 0 0 20px;
    padding: 9px 20px 0 19px;
    border-left: 1px solid #b8c6c6
}
blockquote cite {
    display: block;
    font-size: 12px;
    color: #555
}
blockquote cite:before {
    content: "\2014 \0020"
}
blockquote cite a,
blockquote cite a:visited,
blockquote cite a:visited {
    color: #555
}
hr {
    border: solid #b8c6c6;
    border-width: 1px 0 0;
    clear: both;
    margin: 12px 0;
    height: 0
}
.quote {
    font-size: 16px;
    line-height: 22px;
    text-align: center;
    margin: 0 0 20px 0;
    font-style: italic
}
div.section.collection_description {
    margin: 0 0 1.5em 0
}
a,
a:visited {
    color: #786d9c;
    text-decoration: none;
    outline: 0;
    -webkit-transition: color .1s linear;
    -moz-transition: color .1s linear;
    -o-transition: color .1s linear;
    -ms-transition: color .1s linear;
    transition: color .1s linear
}
a:hover,
a:focus {
    color: #beb6d9
}
ul,
ol {
    margin-bottom: 20px
}
ul {
    list-style: disc outside
}
ol {
    list-style: decimal
}
ul,
ol,
ul.square,
ul.circle,
ul.disc {
    margin-left: 30px
}
ul.square {
    list-style: square outside
}
ul.circle {
    list-style: circle outside
}
ul.disc {
    list-style: disc outside
}
ul ul,
ul ol,
ol ol,
ol ul {
    margin: 4px 0 5px 30px
}
ul ul li,
ul ol li,
ol ol li,
ol ul li {
    margin-bottom: 6px
}
li {
    margin-bottom: 12px
}
ul.large li {
    line-height: 21px
}
ul.none {
    list-style: none outside;
    margin-left: 0
}
ul.border {
    list-style: none outside;
    line-height: 26px
}
ul.border li {
    border-bottom: 1px solid #b8c6c6;
    list-style: none outside none;
    padding: 12px 0;
    margin-bottom: 0
}
.feature_image .header .nav a,
.feature_image .header .nav a.icon-cart,
.feature_image .header .nav a.cart-button span,
.feature_image .header select.currencies {
    color: #ffffff
}
.feature_image .header .nav a:hover,
.nav a.active,
.header_bar a.active,
.feature_image .header .nav a:focus {
    color: #988fb6 !important
}
.nav a.icon-cart span {
    display: inline
}
a.icon-cart,
a.icon-search {
    font-size: 16px !important
}
.nav ul.search_nav {
    margin-bottom: 5px
}
.nav ul li a:hover,
nav ul li a:focus,
.nav a.icon-cart:hover span {
    color: #988fb6 !important
}
.nav ul.menu li {
    padding: 5px 0 5px 3px;
    line-height: 1
}
input.guest_button,
input[type="button"].guest_button {
    font-size: 16px;
    background-color: #666;
    padding: 8px 18px 8px 18px;
    -webkit-border-radius: 35px;
    -khtml-border-radius: 35px;
    -moz-border-radius: 35px;
    -ms-border-radius: 35px;
    -o-border-radius: 35px;
    border-radius: 35px
}
input[type="submit"].guest_button,
input[type="button"].guest_button {
    color: #ffffff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none
}
.nav ul li .cart-button span {
    padding-left: 5px;
    top: -1px
}
input[type="submit"].guest_button,
input[type="submit"].guest_button:hover {
    background-color: #666
}
input[type="submit"].guest_button:hover {
    color: #786d9c
}
.nav ul.menu {
    padding-top: 6px
}
.menu ul a,
.menu li:hover>ul a,
.header .nav ul.menu ul li a {
    white-space: nowrap;
    padding: 8px 0 8px 15px;
    background: none;
    text-align: left;
    color: #ffffff
}
.feature_image .header .nav ul.menu ul li a.sub-link {
    padding: 5px 0 5px 24px
}
.dropdown {
    display: none;
    position: absolute;
    margin-top: -200px
}
.dropdown-wide {
    width: 500px
}
.dropdown-wide ul li a {
    word-wrap: break-word
}
.dropdown a {
    text-shadow: none !important
}
.dropdown_links {
    background: #5a4a91;
    background: #5a4a91;
    margin-top: 200px
}
.nav ul.menu ul {
    width: 250px;
    float: left;
    display: inline
}
.nav ul.menu ul li {
    display: block;
    text-align: left;
    padding: 0
}
.nav ul.menu ul li a {
    border: 0
}
.nav ul.menu ul li a.sub-link,
.nav ul.menu ul li a.sub-link {
    font-weight: normal;
    font-size: 15px;
    padding: 5px 0 5px 24px;
    text-transform: none;
    display: block;
    width: 100%
}
.menu li:hover>.dropdown {
    display: block
}
select.currencies {
    padding: 0;
    border: 0 !important;
    background-color: transparent;
    margin-bottom: 0 !important;
    min-width: 65px;
    outline: 0;
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    text-shadow: none !important;
    box-shadow: none !important
}
select.currencies:active {
    border: 0;
    outline: 0;
    text-shadow: 0;
    box-shadow: 0
}
select.currencies option {
    background: #5a4a91;
    background: #5a4a91;
    color: #ffffff
}
.footer select.currencies,
.footer select.currencies option {
    color: #6b6b6b
}
.nav ul.menu li.currencies {
    padding: 0
}
.toggle_menu {
    position: relative;
    overflow: hidden;
    display: none;
    top: -16px
}
.scroll-arrow {
    opacity: 1;
    display: block;
    background: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/scroll-arrow.png?4241417891200364928) no-repeat center center;
    text-indent: -99999em;
    background-size: 53px;
    height: 53px;
    border: none;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    bottom: 50px;
    -moz-animation-delay: 1.25s;
    -webkit-animation-delay: 1.25s;
    animation-delay: 1.25s
}
.scroll-arrow:hover {
    opacity: 0.5
}
.container div.collection_nav {
    margin-bottom: 1.5em
}
.collection_menu,
.collection_menu li {
    display: inline;
    list-style: none;
    border: none;
    position: relative;
    top: -3px;
    margin: 0
}
.collection_menu li {
    padding-left: 25px
}
.sidebar a,
.sidebar a:visited {
    display: block;
    color: #363636
}
.sidebar a:hover,
.sidebar a:active {
    color: #7f8c8d
}
.sidebar a {
    position: relative;
    left: -8px;
    padding-left: 8px;
    border-left: solid 4px transparent;
    -webkit-transition: border 200ms ease-out;
    -moz-transition: border 200ms ease-out;
    -o-transition: border 200ms ease-out
}
.sidebar a.active,
.sidebar li.active a,
.sidebar a:hover {
    border-left: solid 4px #B8C6C6
}
.sidebar li ul {
    margin: 10px 0 8px 14px;
    font-size: 14px
}
.sidebar li ul li {
    margin-bottom: 12px
}
#search {
    background: #000;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 900;
    position: fixed;
    text-align: center;
    overflow: hidden;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}
div.search-close {
    padding-top: 125px;
    font-size: 32px;
    color: #888;
    position: relative;
    right: 0;
    float: right;
    top: 83px;
    font-size: 28px;
    cursor: pointer
}
#search form {
    z-index: 950;
    padding-top: 50px;
    clear: both
}
#search form input {
    height: 60px;
    border: solid 1px #8a898a;
    padding-left: 55px;
    font-size: 26px
}
::-webkit-input-placeholder {
    color: #888
}
:-moz-placeholder {
    color: #888
}
::-moz-placeholder {
    color: #888
}
:-ms-input-placeholder {
    color: #888
}
.product_row img,
.product_image_col img,
.article img,
.blog_content img,
.section img,
.thumbnail img,
.page img,
.sidebar img,
.logo img,
.cart_image img,
.footer img,
#target img {
    max-width: 100%;
    height: auto
}
.zoomImg {
    max-width: inherit !important;
    cursor: pointer
}
.video-container>div {
    position: relative
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}
.vimeo {
    max-width: 830px;
    margin: 0 auto
}
.vimeo>div {
    padding-top: 56.26506%
}
.youtube {
    max-width: 853px;
    margin: 0 auto
}
.youtube>div {
    padding-top: 56.271981%
}
.slideshow-video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
    overflow: hidden
}
.slideshow-video-container iframe,
.slideshow-video-container object,
.slideshow-video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}
.video-wrapper {
    width: 600px;
    max-width: 100%
}
.header-video {
    position: relative;
    overflow: hidden
}
.header-video .hsContent {
    cursor: pointer
}
.header-video iframe,
.header-video video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}
.header-video iframe {
    height: 100%;
    width: 100%
}
video {
    display: block;
    width: 100%;
    height: auto
}
.header-video--media {
    width: 100%;
    height: auto
}
a.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"],
.action_button,
a.action_button,
input.action_button[type="submit"],
input.action_button[type="button"] {
    background: #5a4a91;
    color: #ffffff;
    border: 0;
    padding: 10px 20px;
    text-align: center;
    cursor: pointer;
    font-family: "Lato";
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
    display: inline-block;
    -webkit-transition: all 200ms ease 0s;
    -moz-transition: all 200ms ease 0s;
    -ms-transition: all 200ms ease 0s;
    -o-transition: all 200ms ease 0s;
    transition: all 200ms ease 0s;
    -webkit-appearance: none;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
a.button:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
.action_button:hover,
input.action_button[type="submit"]:hover,
input.action_button[type="button"]:hover {
    background: #44337f;
    -webkit-transition: all 200ms ease 0s;
    -moz-transition: all 200ms ease 0s;
    -ms-transition: all 200ms ease 0s;
    -o-transition: all 200ms ease 0s;
    transition: all 200ms ease 0s
}
a.button:active,
button:active,
input[type="submit"]:active,
input[type="reset"]:active,
input[type="button"]:active,
.action_button:active,
input.action_button[type="submit"]:active,
input.action_button[type="button"]:active {
    -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05)
}
.add_to_cart,
#cart_form .add_to_cart,
form.product_form input.add_to_cart {
    width: 100%;
    margin-bottom: 0px
}
#cart textarea {
    float: left;
    width: 50%;
    margin: 10px 20px 0px 20px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    min-height: 4em;
    background: #fff;
    background: rgba(255, 255, 255, 0.8)
}
#cart textarea:hover {
    background-color: #fff
}
#cart {
    margin-bottom: 0
}
#cart a.action_button.edit_cart {
    width: 180px;
    margin-left: 20px;
    margin-top: 20px;
    background-color: #444;
    color: #ffffff;
    text-align: center;
    text-indent: 0
}
#cart .action_button {
    width: 180px;
    margin-right: 20px;
    margin-top: 20px;
    background-color: #5a4a91;
    color: #ffffff;
    text-align: center;
    text-indent: 0;
    padding: 10px;
    line-height: 1
}
#cart span::-moz-selection,
#cart p::-moz-selection,
#cart input::-moz-selection {
    background: transparent;
    color: inherit
}
#cart span::selection,
#cart p::selection,
#cart input::selection {
    background: transparent;
    color: inherit
}
label.tos_label {
    display: inline;
    font-weight: normal;
    text-transform: none
}
.tos {
    text-align: right;
    margin: 10px 20px 10px 0
}
div.share-button {
    float: right;
    margin-top: 3px;
    margin-left: 10px
}
div.share-button.sharer-0 label {
    background-color: #007a87;
    color: #fff;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px
}
.share-button.sharer-0 label span {
    color: #fff
}
.share-button.sharer-0 [class*=entypo-]:before {
    display: inline !important
}
.share-button.sharer-0 {
    width: auto !important
}
.disabled {
    pointer-events: none
}
ul.tabs {
    display: block;
    margin: 10px 0 15px 0;
    padding: 0;
    border-bottom: solid 1px #b8c6c6;
    border-top: 0;
    list-style: none outside;
    margin-left: 0
}
ul.tabs li {
    display: block;
    width: auto;
    height: 30px;
    padding: 0;
    float: left;
    margin-bottom: 0;
    border: 0;
    list-style: none outside;
    margin-left: 0
}
ul.tabs li a {
    display: block;
    text-decoration: none;
    width: auto;
    height: 29px;
    padding: 0px 15px;
    line-height: 30px;
    border-width: 1px 0 0 1px;
    margin: 0;
    font-size: 13px
}
ul.tabs li a.active {
    border: solid 1px #b8c6c6;
    background-color: #ffffff;
    border-bottom: #ffffff;
    height: 30px;
    position: relative;
    top: -4px;
    padding-top: 4px;
    border-right-width: 1px;
    margin: 0 -1px 0 0;
    color: #363636;
    -moz-border-radius-topleft: 4px;
    -webkit-border-top-left-radius: 4px;
    border-top-left-radius: 4px;
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px
}
ul.tabs li:first-child a {
    -moz-border-radius-topleft: 4px;
    -webkit-border-top-left-radius: 4px;
    border-top-left-radius: 4px
}
ul.tabs li:last-child a {
    border-width: 1px 1px 0 1px;
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px
}
ul.tabs-content {
    margin: 0;
    display: block;
    border: 0
}
ul.tabs-content>li {
    display: none;
    border: 0
}
ul.tabs-content>li.active {
    display: block;
    border: 0;
    padding-left: 10px
}
ul.tabs:before,
ul.tabs:after {
    content: '\0020';
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0
}
ul.tabs:after {
    clear: both
}
ul.tabs {
    zoom: 1
}
form {
    margin-bottom: 20px
}
fieldset {
    margin-bottom: 20px
}
input[type="text"],
input[type="password"],
input[type="email"],
input[type="search"],
input[type="url"],
input[type="tel"],
input[type="number"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="range"],
input[type="color"],
select,
textarea {
    display: block;
    width: 100%;
    height: 40px;
    min-height: 40px;
    padding: 0 9px;
    margin: 0;
    line-height: 22px;
    border: 1px solid #dfdfdf;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    outline: none;
    background: #fff;
    color: #5f6a7d;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font: 13px "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
    margin-bottom: 15px
}
input[type="text"]:active,
input[type="text"]:focus,
input[type="password"]:active,
input[type="password"]:focus,
input[type="email"]:active,
input[type="email"]:focus,
input[type="search"]:active,
input[type="search"]:focus,
input[type="url"]:active,
input[type="url"]:focus,
input[type="tel"]:active,
input[type="tel"]:focus,
input[type="number"]:active,
input[type="number"]:focus,
input[type="date"]:active,
input[type="date"]:focus,
input[type="month"]:active,
input[type="month"]:focus,
input[type="week"]:active,
input[type="week"]:focus,
input[type="time"]:active,
input[type="time"]:focus,
input[type="range"]:active,
input[type="range"]:focus,
input[type="color"]:active,
input[type="color"]:focus,
select:active,
select:focus,
textarea:active,
textarea:focus {
    border: 1px solid #aaa;
    color: #444;
    -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2)
}
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}
input[type=number] {
    -moz-appearance: textfield
}
select::-ms-expand {
    display: none
}
select {
    background: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/select.png?4241417891200364928) no-repeat right, #fff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 3px;
    border: 1px solid #d9dbdc;
    -webkit-appearance: none;
    -ms-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    appearance: none;
    padding: 10px 9px 8px;
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: ''
}
label,
legend,
.option_title {
    display: block;
    font-weight: bold;
    font-size: 13px;
    text-transform: uppercase
}
input[type="checkbox"] {
    display: inline
}
label span,
legend span {
    font-weight: bold;
    font-size: 13px;
    color: #444
}
textarea {
    padding: 8px;
    min-height: 80px
}
input.sign_up[type="submit"] {
    margin-left: 5px;
    display: inline-block;
    width: inherit !important;
    font-size: 15px !important
}
input.contact_email[type="email"] {
    width: 420px;
    display: inline-block
}
.btn.action_button,
input.btn.action_button[type="submit"],
input.btn.action_button[type="button"] {
    width: inherit
}
#target {
    padding: 20px;
    text-align: center
}
.quantity_label {
    display: inline;
    font-size: smaller
}
.remove_item a {
    font-size: smaller;
    color: #363636
}
input.quantity {
    width: 48px;
    display: inline;
    margin-bottom: 0;
    padding: 8px 5px
}
#cart input.quantity {
    background: #fff;
    background: rgba(255, 255, 255, 0.8);
    text-align: center;
    width: 32px;
    line-height: 1em;
    padding: 0;
    position: relative;
    top: -12px
}
#cart input.quantity:hover,
#cart input.quantity:focus {
    background: #fff;
    background: rgba(255, 255, 255, 0.95)
}
#cart input.quantity::-webkit-inner-spin-button,
#cart input.quantity::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0
}
.cart_items p {
    margin-bottom: 5px
}
li.cart_item a {
    text-indent: 0 !important;
    font-size: small
}
li.last_cart_item:after {
    border: none !important
}
.cart_image {
    padding-right: 20px;
    max-width: 100px;
    text-align: center;
    float: left
}
.continue_shopping {
    float: right;
    padding-top: 5px
}
a.continue {
    text-align: right;
    font-size: 32px;
    margin-right: 15px !important;
    padding: 10px 0 5px 0 !important;
    opacity: 0.8
}
a.continue:hover {
    opacity: 1
}
.empty_cart {
    text-align: center;
    font-size: 22px;
    padding-top: 40px !important;
    color: inherit
}
.empty_cart:after {
    border: 0 !important
}
#get-rates-submit {
    margin-top: -1px
}
#customer_login {
    margin-bottom: 2px
}
.multi_select {
    display: none
}
table {
    width: 100%
}
table th {
    font-weight: 700;
    background: #f9f9f9;
    text-align: left
}
table th,
table td {
    padding: 4px
}
table tr {
    border-bottom: 1px solid #DCDCDC
}
table tr:first-child {
    border-top: 1px solid #DCDCDC
}
table td,
table th {
    border-right: 1px solid #DCDCDC
}
table td:first-child,
table th:first-child {
    border-left: 1px solid #DCDCDC
}
table .em {
    font-weight: 700
}
table tr.order_summary td.label {
    text-align: right
}
table {
    margin-bottom: 20px
}
.hidden {
    display: none
}
.remove {
    color: #363636
}
.relative {
    position: relative
}
.half-bottom {
    margin-bottom: 10px !important
}
.add-bottom {
    margin-bottom: 20px !important
}
.right {
    float: right;
    position: relative
}
.left {
    float: left
}
.inline {
    display: inline
}
.center {
    text-align: center
}
.relative {
    position: relative
}
.align_right {
    text-align: right
}
.align_left {
    text-align: left
}
p.warning {
    text-align: center;
    font-weight: bold;
    padding-top: 10px
}
.container div.mobile_only,
span.mobile_only,
.mobile_only {
    display: none
}
.no_border {
    border: none !important
}
.extra_padding {
    padding-top: 4px
}
div.hidden {
    display: none
}
div.is-absolute,
html.mm-bottom.mm-opened.mm-opening div.is-absolute {
    position: absolute !important;
    top: 0;
    margin-top: 0
}
.index div.is-absolute,
html.index.mm-bottom.mm-opened.mm-opening div.is-absolute {
    margin-top: 29px !important
}
#grid .column,
#grid .columns {
    background: #ddd;
    height: 25px;
    line-height: 25px;
    margin-bottom: 10px;
    text-align: center;
    text-transform: uppercase;
    color: #555;
    font-size: 12px;
    font-weight: bold;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px
}
#grid .column:hover,
#grid .columns:hover {
    background: #bbb;
    color: #333
}
#grid .example-grid {
    overflow: hidden
}
div.container {
    margin: 0 auto;
    padding: 50px 0
}
div.content {
    padding: 20px 0px 0px 0px
}
.logo a {
    margin: 0 auto;
    padding-top: 2px;
    padding-bottom: 2px;
    display: block;
    text-align: center;
    max-width: 205px
}
div.section {
    margin: 10px 0
}
.homepage_content {
    padding: 20px 0
}
.homepage_content,
.homepage_content h1,
.homepage_content h2,
.homepage_content h3,
.homepage_content h4,
.homepage_content h5,
.homepage_content h6 {
    background-color: #ffffff;
    color: #363636
}
div.product_section {
    margin-top: 0
}
div.container div.breadcrumb {
    font-size: 14px
}
div.container div.breadcrumb_text {
    margin-bottom: 1em;
    padding-top: 8px
}
.breadcrumb a.ss-icon {
    font-size: 32px;
    margin: 10px 10px 10px 0;
    color: #363636
}
.breadcrumb a.ss-icon:hover {
    color: #786d9c
}
.nav_arrows {
    float: right
}
.continue_shopping {
    float: right;
    font-size: 14px
}
.vendor,
.sku {
    margin-top: -15px
}
#category {
    width: 100%
}
.paginate {
    text-align: center
}
.paginate a,
.paginate .current,
a.tag {
    border: solid 1px #b8c6c6;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    margin: 10px 5px;
    padding: 5px 10px;
    display: inline-block
}
.paginate .current {
    font-weight: bold
}
a.tag {
    font-size: smaller;
    padding: 4px 6px;
    margin: 5px 2px 5px 0
}
.featured_collections {
    margin-bottom: 10px
}
.paginate a:hover,
a.tag:hover {
    color: #beb6d9
}
.paginate .deco {
    border: none
}
.thumbnail {
    position: relative;
    text-align: center;
    margin-bottom: 1em
}
.featured_collections .thumbnail {
    text-align: center
}
.thumbnail a {
    display: block;
    padding-bottom: 0.5em;
    color: #363636
}
.thumbnail a:hover {
    color: #786d9c
}
.thumbnail .info {
    text-align: center
}
.new {
    position: relative;
    display: inline;
    padding: 5px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    font-size: 12px
}
.thumbnail img {
    margin-bottom: 0.75em;
    opacity: 0;
    transition: opacity .3s ease-in
}
.thumbnail .price,
.thumbnail .sold_out,
.sold_out {
    font-weight: bold;
    color: #363636
}
.thumbnail .sale,
.sale {
    color: #ff5a5f
}
.sale_banner,
.new_banner {
    position: absolute;
    top: 25px;
    left: -5px;
    background: #ff5a5f;
    font-family: "Lato";
    font-weight: normal;
    font-size: 14px;
    text-transform: none;
    letter-spacing: 1px;
    padding: 2px 5px;
    text-align: center;
    color: #fff
}
.new_banner {
    background: #5a4a91
}
.thumbnail .price,
.thumbnail .title {
    display: block
}
.cart_price {
    float: right;
    text-align: right;
    padding-left: 20px;
    font-weight: bold;
    display: none
}
#estimated-shipping,
.excluding_tax {
    display: block
}
.cart_page_image {
    float: left;
    margin-right: 20px;
    text-align: center;
    display: block;
    width: 100%
}
.size_chart {
    float: right;
    padding-top: 8px
}
#size-chart {
    display: none
}
#size-chart h5 {
    padding: 15px 0 0 0;
    text-align: center
}
.cart_page_image img {
    opacity: 0;
    transition: opacity .3s ease-in
}
.price_total_text {
    font-weight: normal;
    display: none
}
.was_price {
    text-decoration: line-through;
    color: #363636;
    font-style: italic;
    text-shadow: none;
    font-weight: normal
}
.thumbnail .quick_shop {
    display: none;
    position: absolute;
    bottom: 5px;
    right: 0;
    color: #363636
}
.thumbnail .quick_shop:hover {
    opacity: 1;
    color: #786d9c
}
.thumbnails a {
    display: block;
    margin-bottom: 1em
}
.twitter-timeline {
    width: 100% !important
}
#instafeed img,
#instafeed video {
    margin-bottom: 1em
}
.arrow {
    font-size: smaller;
    position: relative;
    top: -1px;
    left: 2px;
    opacity: 0.6
}
.modal {
    margin: 10px 0;
    display: none;
    background-color: #ffffff
}
.modal_product {
    width: auto;
    line-height: 0px;
    max-width: 940px
}
.modal_product img {
    cursor: pointer
}
.modal_image {
    text-align: center
}
.modal a {
    padding-bottom: 0
}
.modal p.modal_price,
p.modal_price {
    font-size: 22px;
    margin-bottom: 10px
}
.modal form {
    margin-bottom: 10px
}
.notify_form .action_button {
    width: 100%
}
.product_image_col {
    margin-top: 15px;
    text-align: center
}
.meta {
    font-size: 13px
}
.meta p {
    font-size: 13px;
    margin-bottom: 0px
}
p.meta {
    margin-bottom: 10px
}
.comment-body p.meta {
    margin-bottom: 5px
}
.comment-body h6 {
    padding-top: 0
}
.sidebar_title {
    padding-bottom: 0px
}
.blog_list {
    margin-left: 0
}
.recent_articles {
    padding-top: 10px
}
.recent_articles li {
    padding: 10px 0px
}
.recent_articles a {
    font-size: 14px;
    padding-right: 15px;
    display: block
}
.blog_list li {
    list-style: none
}
.toggle span {
    color: #363636;
    font-weight: bold;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: smaller;
    float: right;
    display: none
}
.sidebar p {
    font-size: 14px
}
.sidebar .search {
    padding-top: 8px
}
.sidebar .search input {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
.meta .label,
.label {
    color: #363636
}
.blog_meta,
.blog_meta a {
    color: #363636
}
.blog_meta a:hover {
    color: #beb6d9
}
.blog_meta p {
    padding-right: 40px
}
.container .blog_content {
    padding-left: 40px;
    border-left: solid 1px #b8c6c6
}
.count {
    font-style: normal;
    font-size: 13px
}
#tag_filter,
#sort-by {
    width: 65%;
    display: inline-block;
    margin-bottom: 0
}
.section_select {
    text-align: right
}
.checkout {
    display: block;
    float: right;
    margin-top: 0px
}
.or {
    font-size: smaller;
    font-style: italic;
    padding: 0 10px
}
.inline_purchase {
    display: inline-block;
    margin-right: 10px;
    margin-top: 25px
}
.quantity-left {
    margin-right: 10px
}
div.article {
    margin-bottom: 35px
}
.comment {
    margin-bottom: 20px
}
.comment-body h6 {
    padding-bottom: 0.25em
}
.gravatar {
    width: 100px !important
}
.gravatar img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    -moz-border-radius: 40px;
    -ms-border-radius: 40px;
    -o-border-radius: 40px;
    border-radius: 40px
}
.red {
    color: #C33
}
.address p {
    margin-bottom: 5px
}
div#disqus_thread ul,
div#disqus_thread li {
    border: none
}
.search_page {
    padding: 40px 0 60px 0
}
.footer {
    margin-top: 2.5em;
    padding: 25px 0;
    border-top: solid 1px #1b1f23;
    background-color: #1b1f23;
    color: #6b6b6b
}
.index .footer {
    margin-top: 0
}
.promo_banner {
    background-color: #1b1f23;
    padding: 2px 0;
    text-align: center;
    color: #6b6b6b;
    font-size: 12px
}
.footer h6,
.footer .footer_menu a {
    margin-bottom: 20px;
    color: #7f8c8d
}
.footer p {
    margin-bottom: 10px;
    font-size: 14px;
    color: #6b6b6b
}
.footer a,
.footer a:visited {
    color: #7f8c8d;
    font-size: 14px
}
.footer a:hover,
.footer a:active {
    color: #ffffff
}
.footer a.ss-icon {
    font-size: 50px
}
.page-contact form {
    margin-bottom: 50px
}
.footer form {
    margin-bottom: 0
}
.page-contact .footer {
    margin-top: 0
}
.page-contact .maps {
    position: relative;
    bottom: -6px
}
.maps iframe {
    pointer-events: none
}
.contact-form {
    margin-bottom: 0
}
.sub-footer .social_icons li {
    display: inline;
    padding-right: 10px
}
.payment_methods {
    margin: 4px 0 6px 0;
    filter: alpha(opacity=80);
    opacity: 0.8
}
.payment_methods img {
    padding-right: 4px;
    height: 30px;
    width: 48px
}
.credits_right {
    text-align: right
}
.footer_menu {
    list-style: none;
    margin: 0
}
.footer_menu li {
    display: inline-block;
    padding-right: 20px
}
.mm-menu.mm-horizontal>.mm-panel {
    -webkit-transition: left 0.4s ease;
    -moz-transition: left 0.4s ease;
    -ms-transition: left 0.4s ease;
    -o-transition: left 0.4s ease;
    transition: left 0.4s ease
}
.mm-menu .mm-hidden {
    display: none
}
.mm-wrapper {
    overflow-x: hidden;
    position: relative
}
.mm-menu {
    background: inherit;
    display: block;
    overflow: hidden;
    width: 100%;
    height: 100%;
    padding: 0;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 0
}
.mm-menu>.mm-panel {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    background: inherit;
    -webkit-overflow-scrolling: touch;
    overflow: scroll;
    overflow-x: hidden;
    overflow-y: auto;
    width: 100%;
    height: 100%;
    padding: 20px;
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 0
}
.mm-menu>.mm-panel.mm-opened {
    left: 0%
}
.mm-menu>.mm-panel.mm-subopened {
    left: -40%
}
.mm-menu>.mm-panel.mm-highest {
    z-index: 1
}
.mm-menu .mm-list {
    padding: 20px 0
}
.mm-menu>.mm-list {
    padding: 10px 0 40px 0
}
.mm-panel>.mm-list {
    margin-left: -20px;
    margin-right: -20px
}
.mm-panel>.mm-list:first-child {
    padding-top: 0
}
.mm-list,
.mm-list>li {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0
}
.mm-list {
    font: inherit;
    font-size: 14px
}
.mm-list a,
.mm-list a:hover {
    text-decoration: none
}
.mm-list>li {
    position: relative
}
.mm-list>li>a,
.mm-list>li>span {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    color: inherit;
    line-height: 20px;
    display: block;
    padding: 15px 10px 15px 20px;
    margin: 0
}
.mm-list>li:not(.mm-subtitle):not(.mm-label):not(.mm-search):not(.mm-noresults):after {
    content: '';
    border-bottom-width: 1px;
    border-bottom-style: solid;
    display: block;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0
}
.mm-list>li:not(.mm-subtitle):not(.mm-label):not(.mm-search):not(.mm-noresults):after {
    width: auto;
    margin-left: 20px;
    position: relative;
    left: auto
}
.mm-list a.mm-subopen {
    width: 40px;
    height: 100%;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 2
}
.mm-list a.mm-subopen:before {
    content: '';
    border-left-width: 1px;
    border-left-style: solid;
    display: block;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0
}
.mm-list a.mm-subopen.mm-fullsubopen {
    width: 100%
}
.mm-list a.mm-subopen.mm-fullsubopen:before {
    border-left: none
}
.mm-list a.mm-subopen+a,
.mm-list a.mm-subopen+span {
    padding-right: 5px;
    margin-right: 40px
}
.mm-list>li.mm-selected>a.mm-subopen {
    background: transparent
}
.mm-list>li.mm-selected>a.mm-fullsubopen+a,
.mm-list>li.mm-selected>a.mm-fullsubopen+span {
    padding-right: 45px;
    margin-right: 0
}
.mm-list a.mm-subclose {
    text-indent: 20px;
    padding-top: 30px;
    margin-top: -20px
}
.mm-list>li.mm-label {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    text-transform: uppercase;
    text-indent: 20px;
    line-height: 25px;
    padding-right: 5px
}
.mm-list>li.mm-spacer {
    padding-top: 40px
}
.mm-list>li.mm-spacer.mm-label {
    padding-top: 25px
}
.mm-list a.mm-subopen:after,
.mm-list a.mm-subclose:before {
    content: '';
    border: 2px solid transparent;
    display: block;
    width: 7px;
    height: 7px;
    margin-bottom: -5px;
    position: absolute;
    bottom: 50%;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}
.mm-list a.mm-subopen:after {
    border-top: none;
    border-left: none;
    right: 18px
}
.mm-list a.mm-subclose:before {
    border-right: none;
    border-bottom: none;
    margin-bottom: -15px;
    left: 22px
}
.mm-menu.mm-vertical .mm-list .mm-panel {
    display: none;
    padding: 10px 0 10px 10px
}
.mm-menu.mm-vertical .mm-list .mm-panel li:last-child:after {
    border-color: transparent
}
.mm-menu.mm-vertical .mm-list li.mm-opened>.mm-panel {
    display: block
}
.mm-menu.mm-vertical .mm-list>li.mm-opened>a.mm-subopen {
    height: 40px
}
.mm-menu.mm-vertical .mm-list>li.mm-opened>a.mm-subopen:after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    top: 16px;
    right: 16px
}
html.mm-opened .mm-page {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5)
}
.mm-ismenu {
    background: #333333;
    color: rgba(255, 255, 255, 0.6)
}
.mm-menu .mm-list>li:after {
    border-color: rgba(0, 0, 0, 0.15)
}
.mm-menu .mm-list>li>a.mm-subclose {
    background: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.3)
}
.mm-menu .mm-list>li>a.mm-subopen:after,
.mm-menu .mm-list>li>a.mm-subclose:before {
    border-color: rgba(255, 255, 255, 0.3)
}
.mm-menu .mm-list>li>a.mm-subopen:before {
    border-color: rgba(0, 0, 0, 0.15)
}
.mm-menu .mm-list>li.mm-selected>a:not(.mm-subopen),
.mm-menu .mm-list>li.mm-selected>span {
    background: rgba(0, 0, 0, 0.1)
}
.mm-menu .mm-list>li.mm-label {
    background: rgba(255, 255, 255, 0.05)
}
.mm-menu.mm-vertical .mm-list li.mm-opened>a.mm-subopen,
.mm-menu.mm-vertical .mm-list li.mm-opened>ul {
    background: rgba(255, 255, 255, 0.05)
}
.mm-page,
.mm-fixed-top,
.mm-fixed-bottom {
    -webkit-transition: none 0.4s ease;
    -moz-transition: none 0.4s ease;
    -ms-transition: none 0.4s ease;
    -o-transition: none 0.4s ease;
    transition: none 0.4s ease;
    -webkit-transition-property: top, right, bottom, left, border;
    -moz-transition-property: top, right, bottom, left, border;
    -ms-transition-property: top, right, bottom, left, border;
    -o-transition-property: top, right, bottom, left, border;
    transition-property: top, right, bottom, left, border
}
.mm-page,
#mm-blocker {
    margin: 0;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}
.mm-page {
    border: 0px solid rgba(0, 0, 0, 0)
}
html.mm-opening .mm-page {
    border: 0px solid rgba(1, 1, 1, 0)
}
.mm-fixed-top,
.mm-fixed-bottom {
    position: fixed;
    left: 0
}
.mm-fixed-top {
    top: 0
}
.mm-fixed-bottom {
    bottom: 0
}
html.mm-opened {
    overflow: hidden;
    position: relative
}
html.mm-opened body {
    overflow: hidden
}
html.mm-opened .mm-page {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    position: relative
}
html.mm-background .mm-page {
    background: inherit
}
#mm-blocker {
    background: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==) transparent;
    display: none;
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 999999
}
html.mm-opened #mm-blocker,
html.mm-blocking #mm-blocker {
    display: block
}
.mm-menu.mm-offcanvas {
    display: none;
    position: fixed
}
.mm-menu.mm-current {
    display: block
}
html.mm-opening .mm-page,
html.mm-opening #mm-blocker,
html.mm-opening .mm-fixed-top,
html.mm-opening .mm-fixed-bottom {
    left: 80%
}
.mm-menu {
    width: 80%
}
@media all and (max-width: 175px) {
    .mm-menu {
        width: 140px
    }
    html.mm-opening .mm-page,
    html.mm-opening #mm-blocker,
    html.mm-opening .mm-fixed-top,
    html.mm-opening .mm-fixed-bottom {
        left: 140px
    }
}
@media all and (min-width: 550px) {
    .mm-menu {
        width: 440px
    }
    html.mm-opening .mm-page,
    html.mm-opening #mm-blocker,
    html.mm-opening .mm-fixed-top,
    html.mm-opening .mm-fixed-bottom {
        left: 440px
    }
}
p.mm-counter {
    font: inherit;
    font-size: 14px;
    font-style: normal;
    font-weight: bold;
    text-indent: 0;
    line-height: 20px;
    display: block;
    margin-top: -10px;
    position: absolute;
    right: 25px;
    top: 50%
}
p.mm-counter+a.mm-subopen {
    padding-left: 40px
}
p.mm-counter+a.mm-subopen+a,
p.mm-counter+a.mm-subopen+span {
    margin-right: 80px
}
p.mm-counter+a.mm-fullsubopen {
    padding-left: 0
}
.mm-vertical p.mm-counter {
    top: 12px;
    margin-top: 0
}
.mm-nosubresults>p.mm-counter {
    display: none
}
.mm-menu p.mm-counter {
    color: rgba(255, 255, 255, 0.9)
}
html.mm-opened.mm-dragging .mm-menu,
html.mm-opened.mm-dragging .mm-page,
html.mm-opened.mm-dragging .mm-fixed-top,
html.mm-opened.mm-dragging .mm-fixed-bottom,
html.mm-opened.mm-dragging #mm-blocker {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -ms-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s
}
.mm-header {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    background: inherit;
    border-bottom: 1px solid transparent;
    text-align: center;
    line-height: 20px;
    width: 100%;
    height: 60px;
    padding: 30px 40px 0 40px;
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0
}
.mm-header .mm-title {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: inline-block;
    width: 100%;
    position: relative;
    z-index: 1
}
.mm-header .mm-prev,
.mm-header .mm-next {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    text-decoration: none;
    display: block;
    width: 40px;
    height: 100%;
    position: absolute;
    bottom: 0
}
.mm-header .mm-prev:before,
.mm-header .mm-next:before {
    content: '';
    border: 2px solid transparent;
    display: block;
    width: 7px;
    height: 7px;
    margin-bottom: -5px;
    position: absolute;
    bottom: 50%;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    margin-bottom: -15px
}
.mm-header .mm-prev {
    left: 0
}
.mm-header .mm-prev:before {
    border-right: none;
    border-bottom: none;
    left: 22px
}
.mm-header .mm-next {
    right: 0
}
.mm-header .mm-next:before {
    border-top: none;
    border-left: none;
    right: 18px
}
.mm-menu.mm-hassearch .mm-header {
    height: 50px;
    padding-top: 20px;
    top: 50px
}
.mm-menu.mm-hassearch .mm-header .mm-prev:before,
.mm-menu.mm-hassearch .mm-header .mm-mext:before {
    margin-bottom: -10px
}
.mm-menu.mm-hasheader li.mm-subtitle {
    display: none
}
.mm-menu.mm-hasheader>.mm-panel {
    padding-top: 80px
}
.mm-menu.mm-hasheader>.mm-panel.mm-list {
    padding-top: 60px
}
.mm-menu.mm-hasheader>.mm-panel>.mm-list:first-child {
    margin-top: -20px
}
.mm-menu.mm-hasheader.mm-hassearch>.mm-panel {
    padding-top: 120px
}
.mm-menu.mm-hasheader.mm-hassearch>.mm-panel.mm-list {
    padding-top: 100px
}
.mm-menu .mm-header {
    border-color: rgba(0, 0, 0, 0.15);
    color: rgba(255, 255, 255, 0.3)
}
.mm-menu .mm-header a:before {
    border-color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-fixedlabels .mm-list {
    background: inherit
}
.mm-menu.mm-fixedlabels .mm-list>li.mm-label {
    background: inherit !important;
    opacity: 0.97;
    height: 25px;
    overflow: visible;
    position: relative;
    z-index: 1
}
.mm-menu.mm-fixedlabels .mm-list>li.mm-label>div {
    background: inherit;
    width: 100%;
    position: absolute;
    left: 0
}
.mm-menu.mm-fixedlabels .mm-list>li.mm-label>div>div {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}
.mm-menu.mm-fixedlabels .mm-list>li.mm-label.mm-spacer>div>div {
    padding-top: 25px
}
.mm-list>li.mm-label>span {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    padding: 0
}
.mm-list>li.mm-label.mm-opened a.mm-subopen:after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    right: 17px
}
.mm-list>li.mm-collapsed {
    display: none
}
.mm-menu .mm-list li.mm-label>div>div {
    background: rgba(255, 255, 255, 0.05)
}
.mm-search,
.mm-search input {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box
}
.mm-list>li.mm-search {
    padding: 10px;
    margin-top: -20px
}
.mm-list>li.mm-subtitle+li.mm-search {
    margin-top: 0
}
div.mm-panel>div.mm-search {
    padding: 0 0 10px 0
}
.mm-menu.mm-hasheader .mm-list>li.mm-search {
    margin-top: 0
}
.mm-search {
    background: inherit;
    width: 100%;
    padding: 10px;
    position: relative;
    top: 0;
    z-index: 2
}
.mm-search input {
    border: none;
    border-radius: 30px;
    font: inherit;
    font-size: 14px;
    line-height: 30px;
    outline: none;
    display: block;
    width: 100%;
    height: 30px;
    margin: 0;
    padding: 0 10px
}
.mm-menu .mm-noresultsmsg {
    text-align: center;
    font-size: 21px;
    display: none;
    padding: 60px 0
}
.mm-menu .mm-noresultsmsg:after {
    border: none !important
}
.mm-noresults .mm-noresultsmsg {
    display: block
}
.mm-menu li.mm-nosubresults>a.mm-subopen {
    display: none
}
.mm-menu li.mm-nosubresults>a.mm-subopen+a,
.mm-menu li.mm-nosubresults>a.mm-subopen+span {
    padding-right: 10px
}
.mm-menu.mm-hassearch>.mm-panel {
    padding-top: 70px
}
.mm-menu.mm-hassearch>.mm-panel>.mm-list:first-child {
    margin-top: -20px
}
.mm-menu.mm-hasheader>.mm-panel>div.mm-search:first-child {
    margin-top: -10px
}
.mm-menu.mm-hasheader>.mm-panel>div.mm-search:first-child+.mm-list {
    padding-top: 0
}
.mm-menu .mm-search input {
    background: rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.6)
}
.mm-menu .mm-noresultsmsg {
    color: rgba(255, 255, 255, 0.3)
}
label.mm-toggle {
    border-radius: 30px;
    width: 50px;
    height: 30px;
    margin: -15px 0 0 0;
    position: absolute;
    top: 50%;
    z-index: 1
}
label.mm-toggle div {
    border-radius: 30px;
    width: 28px;
    height: 28px;
    margin: 1px
}
input.mm-toggle {
    position: absolute;
    left: -10000px
}
input.mm-toggle:checked ~ label.mm-toggle div {
    float: right
}
label.mm-toggle {
    right: 20px
}
label.mm-toggle+a,
label.mm-toggle+span {
    margin-right: 70px
}
a.mm-subopen+label.mm-toggle {
    right: 50px
}
a.mm-subopen+label.mm-toggle+a,
a.mm-subopen+label.mm-toggle+span {
    margin-right: 100px
}
p.mm-counter+a.mm-subopen+label.mm-toggle {
    right: 90px
}
p.mm-counter+a.mm-subopen+label.mm-toggle+a,
p.mm-counter+a.mm-subopen+label.mm-toggle+span {
    margin-right: 140px
}
.mm-menu label.mm-toggle {
    background: rgba(0, 0, 0, 0.15)
}
.mm-menu label.mm-toggle div {
    background: #333333
}
.mm-menu input.mm-toggle:checked ~ label.mm-toggle {
    background: #4bd963
}
html.mm-slide .mm-menu {
    -webkit-transition: -webkit-transform 0.4s ease;
    -moz-transition: -moz-transform 0.4s ease;
    -o-transition: -o-transform 0.4s ease;
    transition: transform 0.4s ease
}
html.mm-slide.mm-opened .mm-menu {
    -webkit-transform: translateX(-40%);
    -moz-transform: translateX(-40%);
    -ms-transform: translateX(-40%);
    -o-transform: translateX(-40%);
    transform: translateX(-40%)
}
html.mm-slide.mm-opening .mm-menu {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%)
}
html.mm-slide.mm-right.mm-opened .mm-menu {
    -webkit-transform: translateX(40%);
    -moz-transform: translateX(40%);
    -ms-transform: translateX(40%);
    -o-transform: translateX(40%);
    transform: translateX(40%)
}
html.mm-slide.mm-right.mm-opening .mm-menu {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%)
}
html.mm-slide.mm-top.mm-opened .mm-menu {
    -webkit-transform: translateY(-40%);
    -moz-transform: translateY(-40%);
    -ms-transform: translateY(-40%);
    -o-transform: translateY(-40%);
    transform: translateY(-40%)
}
html.mm-slide.mm-top.mm-opening .mm-menu {
    -webkit-transform: translateY(0%);
    -moz-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%)
}
html.mm-slide.mm-bottom.mm-opened .mm-menu {
    -webkit-transform: translateY(40%);
    -moz-transform: translateY(40%);
    -ms-transform: translateY(40%);
    -o-transform: translateY(40%);
    transform: translateY(40%)
}
html.mm-slide.mm-bottom.mm-opening .mm-menu {
    -webkit-transform: translateY(0%);
    -moz-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%)
}
html.mm-zoom-menu .mm-menu {
    -webkit-transition: -webkit-transform 0.4s ease;
    -moz-transition: -moz-transform 0.4s ease;
    -o-transition: -o-transform 0.4s ease;
    transition: transform 0.4s ease
}
html.mm-zoom-menu.mm-opened .mm-menu {
    -webkit-transform: scale(0.7, 0.7) translateX(-40%);
    -moz-transform: scale(0.7, 0.7) translateX(-40%);
    -ms-transform: scale(0.7, 0.7) translateX(-40%);
    -o-transform: scale(0.7, 0.7) translateX(-40%);
    transform: scale(0.7, 0.7) translateX(-40%);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center
}
html.mm-zoom-menu.mm-opening .mm-menu {
    -webkit-transform: scale(1, 1) translateX(0%);
    -moz-transform: scale(1, 1) translateX(0%);
    -ms-transform: scale(1, 1) translateX(0%);
    -o-transform: scale(1, 1) translateX(0%);
    transform: scale(1, 1) translateX(0%)
}
html.mm-zoom-menu.mm-right.mm-opened .mm-menu {
    -webkit-transform: scale(0.7, 0.7) translateX(40%);
    -moz-transform: scale(0.7, 0.7) translateX(40%);
    -ms-transform: scale(0.7, 0.7) translateX(40%);
    -o-transform: scale(0.7, 0.7) translateX(40%);
    transform: scale(0.7, 0.7) translateX(40%);
    -webkit-transform-origin: right center;
    -moz-transform-origin: right center;
    -ms-transform-origin: right center;
    -o-transform-origin: right center;
    transform-origin: right center
}
html.mm-zoom-menu.mm-right.mm-opening .mm-menu {
    -webkit-transform: scale(1, 1) translateX(0%);
    -moz-transform: scale(1, 1) translateX(0%);
    -ms-transform: scale(1, 1) translateX(0%);
    -o-transform: scale(1, 1) translateX(0%);
    transform: scale(1, 1) translateX(0%)
}
html.mm-zoom-menu.mm-top.mm-opened .mm-menu {
    -webkit-transform: scale(0.7, 0.7) translateY(-40%);
    -moz-transform: scale(0.7, 0.7) translateY(-40%);
    -ms-transform: scale(0.7, 0.7) translateY(-40%);
    -o-transform: scale(0.7, 0.7) translateY(-40%);
    transform: scale(0.7, 0.7) translateY(-40%);
    -webkit-transform-origin: center top;
    -moz-transform-origin: center top;
    -ms-transform-origin: center top;
    -o-transform-origin: center top;
    transform-origin: center top
}
html.mm-zoom-menu.mm-top.mm-opening .mm-menu {
    -webkit-transform: scale(1, 1) translateY(0%);
    -moz-transform: scale(1, 1) translateY(0%);
    -ms-transform: scale(1, 1) translateY(0%);
    -o-transform: scale(1, 1) translateY(0%);
    transform: scale(1, 1) translateY(0%)
}
html.mm-zoom-menu.mm-bottom.mm-opened .mm-menu {
    -webkit-transform: scale(0.7, 0.7) translateY(40%);
    -moz-transform: scale(0.7, 0.7) translateY(40%);
    -ms-transform: scale(0.7, 0.7) translateY(40%);
    -o-transform: scale(0.7, 0.7) translateY(40%);
    transform: scale(0.7, 0.7) translateY(40%);
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    -o-transform-origin: center bottom;
    transform-origin: center bottom
}
html.mm-zoom-menu.mm-bottom.mm-opening .mm-menu {
    -webkit-transform: scale(1, 1) translateY(0%);
    -moz-transform: scale(1, 1) translateY(0%);
    -ms-transform: scale(1, 1) translateY(0%);
    -o-transform: scale(1, 1) translateY(0%);
    transform: scale(1, 1) translateY(0%)
}
html.mm-zoom-page .mm-page {
    -webkit-transition-property: -webkit-transform, top, right, bottom, left, border;
    -moz-transition-property: -moz-transform, top, right, bottom, left, border;
    -ms-transition-property: -ms-transform, top, right, bottom, left, border;
    -o-transition-property: -o-transform, top, right, bottom, left, border;
    transition-property: transform, top, right, bottom, left, border
}
html.mm-zoom-page.mm-opened .mm-page {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center
}
html.mm-zoom-page.mm-opening .mm-page {
    -webkit-transform: scale(1.5, 1.5);
    -moz-transform: scale(1.5, 1.5);
    -ms-transform: scale(1.5, 1.5);
    -o-transform: scale(1.5, 1.5);
    transform: scale(1.5, 1.5)
}
html.mm-zoom-page.mm-right.mm-opened .mm-page {
    -webkit-transform-origin: right center;
    -moz-transform-origin: right center;
    -ms-transform-origin: right center;
    -o-transform-origin: right center;
    transform-origin: right center
}
html.mm-zoom-page.mm-top.mm-opened .mm-page {
    -webkit-transform-origin: center top;
    -moz-transform-origin: center top;
    -ms-transform-origin: center top;
    -o-transform-origin: center top;
    transform-origin: center top
}
html.mm-zoom-page.mm-bottom.mm-opened .mm-page {
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    -o-transform-origin: center bottom;
    transform-origin: center bottom
}
html.mm-zoom-panels .mm-menu.mm-horizontal>.mm-panel {
    -webkit-transform: scale(1.5, 1.5);
    -moz-transform: scale(1.5, 1.5);
    -ms-transform: scale(1.5, 1.5);
    -o-transform: scale(1.5, 1.5);
    transform: scale(1.5, 1.5);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition-property: -webkit-transform, left;
    -moz-transition-property: -moz-transform, left;
    -ms-transition-property: -ms-transform, left;
    -o-transition-property: -o-transform, left;
    transition-property: transform, left
}
html.mm-zoom-panels .mm-menu.mm-horizontal>.mm-panel.mm-opened {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1)
}
html.mm-zoom-panels .mm-menu.mm-horizontal>.mm-panel.mm-opened.mm-subopened {
    -webkit-transform: scale(0.7, 0.7);
    -moz-transform: scale(0.7, 0.7);
    -ms-transform: scale(0.7, 0.7);
    -o-transform: scale(0.7, 0.7);
    transform: scale(0.7, 0.7)
}
html.mm-opening.mm-fullscreen .mm-page,
html.mm-opening.mm-fullscreen #mm-blocker,
html.mm-opening.mm-fullscreen .mm-fixed-top,
html.mm-opening.mm-fullscreen .mm-fixed-bottom {
    left: 100%
}
.mm-menu.mm-fullscreen {
    width: 100%
}
@media all and (max-width: 140px) {
    .mm-menu.mm-fullscreen {
        width: 140px
    }
    html.mm-opening.mm-fullscreen .mm-page,
    html.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-opening.mm-fullscreen .mm-fixed-top,
    html.mm-opening.mm-fullscreen .mm-fixed-bottom {
        left: 140px
    }
}
@media all and (min-width: 10000px) {
    .mm-menu.mm-fullscreen {
        width: 10000px
    }
    html.mm-opening.mm-fullscreen .mm-page,
    html.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-opening.mm-fullscreen .mm-fixed-top,
    html.mm-opening.mm-fullscreen .mm-fixed-bottom {
        left: 10000px
    }
}
.mm-menu.mm-top.mm-fullscreen {
    height: 100%
}
html.mm-top.mm-opening.mm-fullscreen .mm-page,
html.mm-top.mm-opening.mm-fullscreen #mm-blocker,
html.mm-top.mm-opening.mm-fullscreen .mm-fixed-top {
    top: 100%
}
html.mm-top.mm-opening.mm-fullscreen .mm-fixed-bottom {
    bottom: -100%
}
@media all and (max-height: 140px) {
    .mm-menu.mm-top.mm-fullscreen {
        height: 140px
    }
    html.mm-top.mm-opening.mm-fullscreen .mm-page,
    html.mm-top.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-top.mm-opening.mm-fullscreen .mm-fixed-top {
        top: 140px
    }
    html.mm-top.mm-opening.mm-fullscreen .mm-fixed-bottom {
        bottom: -140px
    }
}
@media all and (min-height: 10000px) {
    .mm-menu.mm-top.mm-fullscreen {
        height: 10000px
    }
    html.mm-top.mm-opening.mm-fullscreen .mm-page,
    html.mm-top.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-top.mm-opening.mm-fullscreen .mm-fixed-top {
        top: 10000px
    }
    html.mm-top.mm-opening.mm-fullscreen .mm-fixed-bottom {
        bottom: -10000px
    }
}
.mm-menu.mm-right.mm-fullscreen {
    width: 100%
}
html.mm-right.mm-opening.mm-fullscreen .mm-page,
html.mm-right.mm-opening.mm-fullscreen #mm-blocker,
html.mm-right.mm-opening.mm-fullscreen .mm-fixed-top,
html.mm-right.mm-opening.mm-fullscreen .mm-fixed-bottom {
    right: 100%
}
@media all and (max-width: 140px) {
    .mm-menu.mm-right.mm-fullscreen {
        width: 140px
    }
    html.mm-right.mm-opening.mm-fullscreen .mm-page,
    html.mm-right.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-right.mm-opening.mm-fullscreen .mm-fixed-top,
    html.mm-right.mm-opening.mm-fullscreen .mm-fixed-bottom {
        right: 140px
    }
}
@media all and (min-width: 10000px) {
    .mm-menu.mm-right.mm-fullscreen {
        width: 10000px
    }
    html.mm-right.mm-opening.mm-fullscreen .mm-page,
    html.mm-right.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-right.mm-opening.mm-fullscreen .mm-fixed-top,
    html.mm-right.mm-opening.mm-fullscreen .mm-fixed-bottom {
        right: 10000px
    }
}
.mm-menu.mm-bottom.mm-fullscreen {
    height: 100%
}
html.mm-bottom.mm-opening.mm-fullscreen .mm-page,
html.mm-bottom.mm-opening.mm-fullscreen #mm-blocker,
html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-bottom {
    bottom: 100%
}
html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-top {
    top: -100%
}
@media all and (max-height: 140px) {
    .mm-menu.mm-bottom.mm-fullscreen {
        height: 140px
    }
    html.mm-bottom.mm-opening.mm-fullscreen .mm-page,
    html.mm-bottom.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-bottom {
        bottom: 140px
    }
    html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-top {
        top: -140px
    }
}
@media all and (min-height: 10000px) {
    .mm-menu.mm-bottom.mm-fullscreen {
        height: 10000px
    }
    html.mm-bottom.mm-opening.mm-fullscreen .mm-page,
    html.mm-bottom.mm-opening.mm-fullscreen #mm-blocker,
    html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-bottom {
        bottom: 10000px
    }
    html.mm-bottom.mm-opening.mm-fullscreen .mm-fixed-top {
        top: -10000px
    }
}
.mm-menu.mm-fullscreen.mm-front,
.mm-menu.mm-fullscreen.mm-next {
    left: -100%
}
@media all and (max-width: 140px) {
    .mm-menu.mm-fullscreen.mm-front,
    .mm-menu.mm-fullscreen.mm-next {
        left: -140px
    }
}
@media all and (min-width: 10000px) {
    .mm-menu.mm-fullscreen.mm-front,
    .mm-menu.mm-fullscreen.mm-next {
        left: -10000px
    }
}
.mm-menu.mm-top.mm-fullscreen.mm-front,
.mm-menu.mm-top.mm-fullscreen.mm-next {
    top: -100%
}
@media all and (max-height: 140px) {
    .mm-menu.mm-top.mm-fullscreen.mm-front,
    .mm-menu.mm-top.mm-fullscreen.mm-next {
        top: -140px
    }
}
@media all and (min-height: 10000px) {
    .mm-menu.mm-top.mm-fullscreen.mm-front,
    .mm-menu.mm-top.mm-fullscreen.mm-next {
        top: -10000px
    }
}
.mm-menu.mm-right.mm-fullscreen.mm-front,
.mm-menu.mm-right.mm-fullscreen.mm-next {
    right: -100%
}
@media all and (max-width: 140px) {
    .mm-menu.mm-right.mm-fullscreen.mm-front,
    .mm-menu.mm-right.mm-fullscreen.mm-next {
        right: -140px
    }
}
@media all and (min-width: 10000px) {
    .mm-menu.mm-right.mm-fullscreen.mm-front,
    .mm-menu.mm-right.mm-fullscreen.mm-next {
        right: -10000px
    }
}
.mm-menu.mm-bottom.mm-fullscreen.mm-front,
.mm-menu.mm-bottom.mm-fullscreen.mm-next {
    bottom: -100%
}
@media all and (max-height: 140px) {
    .mm-menu.mm-bottom.mm-fullscreen.mm-front,
    .mm-menu.mm-bottom.mm-fullscreen.mm-next {
        bottom: -140px
    }
}
@media all and (min-height: 10000px) {
    .mm-menu.mm-bottom.mm-fullscreen.mm-front,
    .mm-menu.mm-bottom.mm-fullscreen.mm-next {
        bottom: -10000px
    }
}
html.mm-front .mm-fixed-top,
html.mm-front .mm-fixed-bottom,
html.mm-opening.mm-front .mm-fixed-top,
html.mm-opening.mm-front .mm-fixed-bottom {
    left: 0;
    right: auto
}
html.mm-front .mm-fixed-top,
html.mm-opening.mm-front .mm-fixed-top {
    top: 0
}
html.mm-front .mm-fixed-bottom,
html.mm-opening.mm-front .mm-fixed-bottom {
    bottom: 0
}
html.mm-opened.mm-fullscreen .mm-page {
    box-shadow: none !important
}
.mm-menu.mm-top {
    width: 100%
}
html.mm-top.mm-opened .mm-page,
html.mm-top.mm-opened #mm-blocker {
    top: 0%
}
html.mm-top.mm-opened.mm-opening .mm-page,
html.mm-top.mm-opened.mm-opening #mm-blocker,
html.mm-top.mm-opened.mm-opening .mm-fixed-top,
html.mm-top.mm-opened.mm-opening .mm-fixed-bottom {
    left: 0
}
.mm-menu.mm-right {
    left: auto;
    right: 0
}
html.mm-right.mm-opened .mm-page,
html.mm-right.mm-opened #mm-blocker,
html.mm-right.mm-opened .mm-fixed-top,
html.mm-right.mm-opened .mm-fixed-bottom {
    left: auto;
    right: 0%
}
html.mm-right.mm-opened.mm-opening .mm-page,
html.mm-right.mm-opened.mm-opening #mm-blocker,
html.mm-right.mm-opened.mm-opening .mm-fixed-top,
html.mm-right.mm-opened.mm-opening .mm-fixed-bottom {
    left: auto
}
.mm-menu.mm-bottom {
    width: 100%;
    top: auto;
    bottom: 0
}
html.mm-bottom.mm-opened .mm-page,
html.mm-bottom.mm-opened #mm-blocker {
    bottom: 0%;
    top: auto
}
html.mm-bottom.mm-opened.mm-opening .mm-page,
html.mm-bottom.mm-opened.mm-opening #mm-blocker,
html.mm-bottom.mm-opened.mm-opening .mm-fixed-top,
html.mm-bottom.mm-opened.mm-opening .mm-fixed-bottom {
    top: auto;
    left: 0
}
.mm-menu.mm-top {
    height: 80%
}
html.mm-top.mm-opening .mm-page,
html.mm-top.mm-opening #mm-blocker,
html.mm-top.mm-opening .mm-fixed-top {
    top: 80%
}
html.mm-top.mm-opening .mm-fixed-bottom {
    bottom: -80%
}
@media all and (max-height: 175px) {
    .mm-menu.mm-top {
        height: 140px
    }
    html.mm-top.mm-opening .mm-page,
    html.mm-top.mm-opening #mm-blocker,
    html.mm-top.mm-opening .mm-fixed-top {
        top: 140px
    }
    html.mm-top.mm-opening .mm-fixed-bottom {
        bottom: -140px
    }
}
@media all and (min-height: 1100px) {
    .mm-menu.mm-top {
        height: 880px
    }
    html.mm-top.mm-opening .mm-page,
    html.mm-top.mm-opening #mm-blocker,
    html.mm-top.mm-opening .mm-fixed-top {
        top: 880px
    }
    html.mm-top.mm-opening .mm-fixed-bottom {
        bottom: -880px
    }
}
.mm-menu.mm-right {
    width: 80%
}
html.mm-right.mm-opening .mm-page,
html.mm-right.mm-opening #mm-blocker,
html.mm-right.mm-opening .mm-fixed-top,
html.mm-right.mm-opening .mm-fixed-bottom {
    right: 80%
}
@media all and (max-width: 175px) {
    .mm-menu.mm-right {
        width: 140px
    }
    html.mm-right.mm-opening .mm-page,
    html.mm-right.mm-opening #mm-blocker,
    html.mm-right.mm-opening .mm-fixed-top,
    html.mm-right.mm-opening .mm-fixed-bottom {
        right: 140px
    }
}
@media all and (min-width: 550px) {
    .mm-menu.mm-right {
        width: 440px
    }
    html.mm-right.mm-opening .mm-page,
    html.mm-right.mm-opening #mm-blocker,
    html.mm-right.mm-opening .mm-fixed-top,
    html.mm-right.mm-opening .mm-fixed-bottom {
        right: 440px
    }
}
.mm-menu.mm-bottom {
    height: 80%
}
html.mm-bottom.mm-opening .mm-page,
html.mm-bottom.mm-opening #mm-blocker,
html.mm-bottom.mm-opening .mm-fixed-bottom {
    bottom: 80%
}
html.mm-bottom.mm-opening .mm-fixed-top {
    top: -80%
}
@media all and (max-height: 175px) {
    .mm-menu.mm-bottom {
        height: 140px
    }
    html.mm-bottom.mm-opening .mm-page,
    html.mm-bottom.mm-opening #mm-blocker,
    html.mm-bottom.mm-opening .mm-fixed-bottom {
        bottom: 140px
    }
    html.mm-bottom.mm-opening .mm-fixed-top {
        top: -140px
    }
}
@media all and (min-height: 1100px) {
    .mm-menu.mm-bottom {
        height: 880px
    }
    html.mm-bottom.mm-opening .mm-page,
    html.mm-bottom.mm-opening #mm-blocker,
    html.mm-bottom.mm-opening .mm-fixed-bottom {
        bottom: 880px
    }
    html.mm-bottom.mm-opening .mm-fixed-top {
        top: -880px
    }
}
html.mm-front.mm-opened .mm-page {
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    left: 0 !important
}
.mm-menu.mm-front,
.mm-menu.mm-next {
    -webkit-transition: none 0.4s ease;
    -moz-transition: none 0.4s ease;
    -ms-transition: none 0.4s ease;
    -o-transition: none 0.4s ease;
    transition: none 0.4s ease;
    -webkit-transition-property: top, right, bottom, left, -webkit-transform;
    -moz-transition-property: top, right, bottom, left, -moz-transform;
    -ms-transition-property: top, right, bottom, left, -o-transform;
    -o-transition-property: top, right, bottom, left, -o-transform;
    transition-property: top, right, bottom, left, transform
}
html.mm-front .mm-page,
html.mm-front #mm-blocker {
    z-index: 0
}
.mm-menu.mm-front {
    z-index: 1;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5)
}
html.mm-opened.mm-next .mm-page {
    box-shadow: none
}
html.mm-opening .mm-menu.mm-front,
html.mm-opening .mm-menu.mm-next {
    left: 0%
}
.mm-menu.mm-top.mm-front,
.mm-menu.mm-top.mm-next {
    left: 0
}
html.mm-opening .mm-menu.mm-top.mm-front,
html.mm-opening .mm-menu.mm-top.mm-next {
    left: 0;
    top: 0%
}
.mm-menu.mm-right.mm-front,
.mm-menu.mm-right.mm-next {
    left: auto
}
html.mm-opening .mm-menu.mm-right.mm-front,
html.mm-opening .mm-menu.mm-right.mm-next {
    left: auto;
    right: 0%
}
.mm-menu.mm-bottom.mm-front,
.mm-menu.mm-bottom.mm-next {
    top: auto;
    left: 0
}
html.mm-opening .mm-menu.mm-bottom.mm-front,
html.mm-opening .mm-menu.mm-bottom.mm-next {
    left: 0;
    bottom: 0%
}
.mm-menu.mm-front,
.mm-menu.mm-next {
    left: -80%
}
@media all and (max-width: 175px) {
    .mm-menu.mm-front,
    .mm-menu.mm-next {
        left: -140px
    }
}
@media all and (min-width: 550px) {
    .mm-menu.mm-front,
    .mm-menu.mm-next {
        left: -440px
    }
}
.mm-menu.mm-top.mm-front,
.mm-menu.mm-top.mm-next {
    top: -80%
}
@media all and (max-height: 175px) {
    .mm-menu.mm-top.mm-front,
    .mm-menu.mm-top.mm-next {
        top: -140px
    }
}
@media all and (min-height: 1100px) {
    .mm-menu.mm-top.mm-front,
    .mm-menu.mm-top.mm-next {
        top: -880px
    }
}
.mm-menu.mm-right.mm-front,
.mm-menu.mm-right.mm-next {
    right: -80%
}
@media all and (max-width: 175px) {
    .mm-menu.mm-right.mm-front,
    .mm-menu.mm-right.mm-next {
        right: -140px
    }
}
@media all and (min-width: 550px) {
    .mm-menu.mm-right.mm-front,
    .mm-menu.mm-right.mm-next {
        right: -440px
    }
}
.mm-menu.mm-bottom.mm-front,
.mm-menu.mm-bottom.mm-next {
    bottom: -80%
}
@media all and (max-height: 175px) {
    .mm-menu.mm-bottom.mm-front,
    .mm-menu.mm-bottom.mm-next {
        bottom: -140px
    }
}
@media all and (min-height: 1100px) {
    .mm-menu.mm-bottom.mm-front,
    .mm-menu.mm-bottom.mm-next {
        bottom: -880px
    }
}
html.mm-front .mm-fixed-top,
html.mm-front .mm-fixed-bottom,
html.mm-opening.mm-front .mm-fixed-top,
html.mm-opening.mm-front .mm-fixed-bottom {
    left: 0;
    right: auto
}
html.mm-front .mm-fixed-top,
html.mm-opening.mm-front .mm-fixed-top {
    top: 0
}
html.mm-front .mm-fixed-bottom,
html.mm-opening.mm-front .mm-fixed-bottom {
    bottom: 0
}
html.mm-opened.mm-light .mm-page {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3)
}
.mm-ismenu.mm-light {
    background-color: #f3f3f3;
    color: rgba(0, 0, 0, 0.6)
}
#cart.mm-ismenu.mm-light {
    background: #f3f3f3;
    background: rgba(243, 243, 243, 0.8)
}
.mm-menu.mm-light .mm-list>li:after {
    border-color: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-light .mm-list>li>a.mm-subclose {
    background: rgba(255, 255, 255, 0.6);
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light .mm-list>li>a.mm-subopen:after,
.mm-menu.mm-light .mm-list>li>a.mm-subclose:before {
    border-color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light .mm-list>li>a.mm-subopen:before {
    border-color: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-light .mm-list>li.mm-selected>a:not(.mm-subopen),
.mm-menu.mm-light .mm-list>li.mm-selected>span {
    background: rgba(255, 255, 255, 0.6)
}
.mm-menu.mm-light .mm-list>li.mm-label {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-light.mm-vertical .mm-list li.mm-opened>a.mm-subopen,
.mm-menu.mm-light.mm-vertical .mm-list li.mm-opened>ul {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-light .mm-search input {
    background: rgba(0, 0, 0, 0.1);
    color: rgba(0, 0, 0, 0.6)
}
.mm-menu.mm-light .mm-noresultsmsg {
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light p.mm-counter {
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light .mm-list li.mm-label>div>div {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-light .mm-header {
    border-color: rgba(0, 0, 0, 0.1);
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light .mm-header a:before {
    border-color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-light label.mm-toggle {
    background: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-light label.mm-toggle div {
    background: #f3f3f3
}
.mm-menu.mm-light input.mm-toggle:checked ~ label.mm-toggle {
    background: #4bd963
}
html.mm-opened.mm-white .mm-page {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3)
}
.mm-ismenu.mm-white {
    background-color: #fff;
    color: rgba(0, 0, 0, 0.6)
}
#cart.mm-ismenu.mm-white {
    background: #fff;
    background: rgba(255, 255, 255, 0.8)
}
.mm-menu.mm-white .mm-list>li:after {
    border-color: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-white .mm-list>li>a.mm-subclose {
    background: rgba(0, 0, 0, 0.06);
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white .mm-list>li>a.mm-subopen:after,
.mm-menu.mm-white .mm-list>li>a.mm-subclose:before {
    border-color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white .mm-list>li>a.mm-subopen:before {
    border-color: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-white .mm-list>li.mm-selected>a:not(.mm-subopen),
.mm-menu.mm-white .mm-list>li.mm-selected>span {
    background: rgba(0, 0, 0, 0.06)
}
.mm-menu.mm-white .mm-list>li.mm-label {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-white.mm-vertical .mm-list li.mm-opened>a.mm-subopen,
.mm-menu.mm-white.mm-vertical .mm-list li.mm-opened>ul {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-white .mm-search input {
    background: rgba(0, 0, 0, 0.1);
    color: rgba(0, 0, 0, 0.6)
}
.mm-menu.mm-white .mm-noresultsmsg {
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white p.mm-counter {
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white .mm-list li.mm-label>div>div {
    background: rgba(0, 0, 0, 0.03)
}
.mm-menu.mm-white .mm-header {
    border-color: rgba(0, 0, 0, 0.1);
    color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white .mm-header a:before {
    border-color: rgba(0, 0, 0, 0.3)
}
.mm-menu.mm-white label.mm-toggle {
    background: rgba(0, 0, 0, 0.1)
}
.mm-menu.mm-white label.mm-toggle div {
    background: white
}
.mm-menu.mm-white input.mm-toggle:checked ~ label.mm-toggle {
    background: #4bd963
}
html.mm-opened.mm-black .mm-page {
    box-shadow: none
}
.mm-ismenu.mm-black {
    background-color: #000;
    color: rgba(255, 255, 255, 0.6)
}
#cart.mm-ismenu.mm-black {
    background: #000;
    background: rgba(0, 0, 0, 0.7)
}
.mm-menu.mm-black .mm-list>li:after {
    border-color: rgba(255, 255, 255, 0.2)
}
.mm-menu.mm-black .mm-list>li>a.mm-subclose {
    background: rgba(255, 255, 255, 0.25);
    color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-black .mm-list>li>a.mm-subopen:after,
.mm-menu.mm-black .mm-list>li>a.mm-subclose:before {
    border-color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-black .mm-list>li>a.mm-subopen:before {
    border-color: rgba(255, 255, 255, 0.2)
}
.mm-menu.mm-black .mm-list>li.mm-selected>a:not(.mm-subopen),
.mm-menu.mm-black .mm-list>li.mm-selected>span {
    background: rgba(255, 255, 255, 0.25)
}
.mm-menu.mm-black .mm-list>li.mm-label {
    background: rgba(255, 255, 255, 0.15)
}
.mm-menu.mm-black.mm-vertical .mm-list li.mm-opened>a.mm-subopen,
.mm-menu.mm-black.mm-vertical .mm-list li.mm-opened>ul {
    background: rgba(255, 255, 255, 0.15)
}
.mm-menu.mm-black .mm-search input {
    background: rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.6)
}
.mm-menu.mm-black .mm-noresultsmsg {
    color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-black p.mm-counter {
    color: rgba(255, 255, 255, 0.8)
}
.mm-menu.mm-black .mm-list li.mm-label>div>div {
    background: rgba(255, 255, 255, 0.15)
}
.mm-menu.mm-black .mm-header {
    border-color: rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-black .mm-header a:before {
    border-color: rgba(255, 255, 255, 0.3)
}
.mm-menu.mm-black label.mm-toggle {
    background: rgba(255, 255, 255, 0.2)
}
.mm-menu.mm-black label.mm-toggle div {
    background: black
}
.mm-menu.mm-black input.mm-toggle:checked ~ label.mm-toggle {
    background: #4bd963
}
.mm-fixed-top {
    -webkit-transition-property: top, right, bottom, left, border, background-color;
    -moz-transition-property: top, right, bottom, left, border, background-color;
    -ms-transition-property: top, right, bottom, left, border, background-color;
    -o-transition-property: top, right, bottom, left, border, background-color;
    transition-property: top, right, bottom, left, border, background-color
}
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus {
    outline: none
}
.slides,
.flex-control-nav,
.flex-direction-nav,
.flex-direction-nav li {
    margin: 0;
    padding: 0;
    list-style: none
}
ul.slides li {
    border: none;
    padding: 0;
    margin-bottom: 0;
    position: relative
}
html[xmlns] .slides {
    display: block
}
.flexslider {
    margin: 0;
    padding: 0;
    z-index: 0
}
.flexslider .slides>li {
    display: none;
    -webkit-backface-visibility: hidden
}
.flexslider .slides img {
    display: block
}
.flex-pauseplay span {
    text-transform: capitalize
}
.slides:after {
    content: "\0020";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0
}
* html .slides {
    height: 1%
}
.no-js .slides>li:first-child {
    display: block
}
.flexslider .slides img {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 0 auto
}
.flexslider {
    position: relative;
    zoom: 1;
    clear: both;
    overflow: hidden
}
.flex-viewport {
    max-height: 2000px;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease
}
.loading .flex-viewport {
    max-height: 300px
}
.flexslider .slides {
    zoom: 1
}
.flexslider .slides li {
    text-align: center;
    position: relative
}
.carousel li {
    margin-right: 5px;
    border: 0
}
.flex-caption {
    margin: 0;
    width: 100%;
    position: absolute;
    top: 22%;
    color: #fff
}
.headline {
    font-size: 42px;
    margin-bottom: 0.5em;
    line-height: 47px;
    font-weight: normal;
    position: relative;
    letter-spacing: 3px
}
p.subtitle {
    font-family: "Nunito";
    font-weight: bold;
    font-style: normal;
    text-transform: none;
    font-size: 18px;
    line-height: 1.5em;
    position: relative
}
.flex-direction-nav {
    *height: 0
}
.flex-direction-nav a {
    width: 60px;
    height: 60px;
    margin: -20px 0 0;
    display: block;
    z-index: 10;
    position: absolute;
    top: 50%;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: all .3s ease;
    color: #333;
    text-shadow: 0 0 1px #fff
}
.flex-direction-nav .flex-next {
    background-position: 0 -120px;
    right: -36px;
    text-align: center
}
.flex-direction-nav .flex-prev {
    background-position: 0 -60px;
    left: -36px;
    text-align: center
}
.flexslider:hover .flex-next {
    opacity: 0.6;
    right: 15px
}
.flexslider:hover .flex-prev {
    opacity: 0.6;
    left: 15px
}
.flexslider:hover .flex-next:hover,
.flexslider:hover .flex-prev:hover {
    opacity: 1
}
.flex-direction-nav .flex-disabled {
    opacity: .3 !important;
    filter: alpha(opacity=30);
    cursor: default
}
.flex-control-nav {
    position: absolute;
    bottom: 40px;
    text-align: center;
    width: 100%;
    z-index: 10
}
.flex-control-nav li {
    margin: 0 0 0 5px;
    display: inline-block;
    zoom: 1;
    *display: inline
}
.flex-control-nav li:first-child {
    margin: 0
}
.flex-control-nav li a {
    width: 40px;
    height: 1px;
    display: block;
    opacity: 0.3;
    cursor: pointer;
    text-indent: -9999em;
    border: 3px solid #fff;
    background: #fff;
    overflow: hidden;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -o-border-radius: 1px;
    border-radius: 1px
}
.flex-control-nav li a.flex-active {
    opacity: 0.8;
    cursor: default
}
.flex-control-thumbs {
    width: 100%;
    position: absolute;
    bottom: -40px;
    text-align: center
}
.flex-control-thumbs li {
    margin: 0 6px;
    display: inline-block;
    zoom: 1;
    *display: inline
}
.flex-control-thumbs {
    position: static;
    overflow: hidden
}
.flex-control-thumbs li,
.flex-control-thumbs li:first-child {
    width: 16%;
    vertical-align: top;
    margin: 15px 5% 0 0
}
.flex-control-thumbs img {
    width: 100%;
    display: block;
    opacity: .7;
    cursor: pointer
}
.flex-control-thumbs img:hover {
    opacity: 1
}
.flex-control-thumbs .flex-active {
    opacity: 1;
    cursor: default
}
.product_slider .flex-active-slide a:hover {
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in
}
.product_slider {
    margin-bottom: 2em
}
.product_slider .slides img {
    width: auto !important
}
.flex-control-thumbs li:nth-child(5n) {
    margin: 15px 0 0
}
/*! fancyBox v2.1.2 fancyapps.com | fancyapps.com/fancybox/#license */

.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp {
    padding: 0;
    margin: 0;
    border: 0;
    outline: none;
    vertical-align: top
}
.fancybox-wrap {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 8020
}
.fancybox-skin {
    position: relative;
    background-color: #ffffff;
    color: #444;
    text-shadow: none
}
.fancybox-opened {
    z-index: 8030
}
.fancybox-opened .fancybox-skin {
    -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5)
}
.fancybox-outer,
.fancybox-inner {
    position: relative
}
.fancybox-inner {
    overflow: hidden
}
.fancybox-type-iframe .fancybox-inner {
    -webkit-overflow-scrolling: touch
}
.fancybox-error {
    color: #444;
    font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 15px;
    white-space: nowrap
}
.fancybox-image,
.fancybox-iframe {
    display: block;
    width: 100%;
    height: 100%
}
.fancybox-image {
    max-width: 100%;
    max-height: 100%
}
#fancybox-loading {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -22px;
    margin-left: -22px;
    background-position: 0 -306px;
    opacity: 1;
    cursor: pointer;
    z-index: 8060;
    -webkit-border-radius: 4px;
    -khtml-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    background-color: #fff
}
#fancybox-loading div {
    width: 44px;
    height: 44px;
    background: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/loader.gif?4241417891200364928") center center no-repeat;
    background-size: 32px 32px;
    display: block !important
}
.fancybox-close {
    position: absolute;
    top: -18px;
    right: 0px;
    cursor: pointer;
    z-index: 8040;
    font-size: 24px !important;
    color: #363636
}
.fancybox-nav {
    position: absolute;
    top: 0;
    width: 40%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
    background: transparent url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/blank.gif?4241417891200364928");
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    z-index: 8040
}
.fancybox-prev {
    left: 0
}
.fancybox-next {
    right: 0
}
.fancybox-nav span {
    position: absolute;
    top: 45%;
    width: 60px;
    height: 60px;
    margin-top: -18px;
    cursor: pointer;
    z-index: 8040;
    visibility: hidden;
    color: #333;
    opacity: 0.8;
    text-shadow: 0 0 1px #fff
}
.fancybox-prev span {
    left: 10px
}
.fancybox-next span {
    right: 10px
}
.fancybox-nav:hover span {
    visibility: visible
}
.fancybox-tmp {
    position: absolute;
    top: -9999px;
    left: -9999px;
    visibility: hidden
}
.fancybox-lock {
    overflow: hidden
}
.fancybox-overlay {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    display: none;
    z-index: 8010;
    background: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/fancybox_overlay.png?4241417891200364928)
}
.fancybox-overlay-fixed {
    position: fixed;
    bottom: 0;
    right: 0
}
.fancybox-lock .fancybox-overlay {
    overflow: auto;
    overflow-y: scroll
}
.fancybox-title {
    visibility: hidden;
    font: normal 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    position: relative;
    text-shadow: none;
    z-index: 8050;
    width: 100%
}
.fancybox-opened .fancybox-title {
    visibility: visible
}
.fancybox-title-float-wrap {
    position: absolute;
    bottom: 0;
    right: 50%;
    margin-bottom: -28px;
    z-index: 8050;
    text-align: center
}
.fancybox-title-float-wrap .child {
    display: inline-block;
    margin-right: -100%;
    padding: 2px 0px;
    background: transparent;
    background: rgba(0, 0, 0, 0.6);
    text-shadow: 0 1px 2px #222;
    color: #FFF;
    font-weight: bold;
    line-height: 24px;
    white-space: nowrap;
    width: 100%;
    -webkit-border-bottom-right-radius: 4px;
    -webkit-border-bottom-left-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -moz-border-radius-bottomleft: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px
}
.fancybox-title-outside-wrap {
    position: relative;
    margin-top: 10px;
    color: #fff
}
.fancybox-title-inside-wrap {
    padding-top: 10px
}
.fancybox-title-over-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    color: #fff;
    padding: 10px;
    background: #000;
    background: rgba(0, 0, 0, 0.8)
}
.newsletter_popup .fancybox-skin,
.newsletter_popup .fancybox-skin h1 {
    color: #363636 !important
}
.newsletter_popup {
    background-color: #ffffff
}
.newsletter_popup .fancybox-close {
    color: #363636 !important
}
.cloudzoom-lens {
    border: none;
    border: 1px solid #888;
    width: 225px;
    height: 175px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    z-index: 11
}
.cloudzoom-zoom {
    border: 1px solid #888;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    background-color: #ffffff
}
.cloudzoom-zoom-inside {
    border: none;
    box-shadow: none
}
.cloudzoom-caption {
    display: none;
    text-align: left;
    background-color: #000;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    font-family: sans-serif;
    font-size: 11px
}
.cloudzoom-blank {
    background-image: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/blank.gif?4241417891200364928")
}
div.cloudzoom-ajax-loader {
    display: none
}
.cloudzoom-lens+div {
    display: none !important
}
.container {
    position: relative;
    width: 1200px;
    margin: 0 auto;
    padding: 0
}
.column,
.columns {
    float: left;
    display: inline;
    margin-left: 10px;
    margin-right: 10px
}
.row {
    margin-bottom: 20px
}
.column.alpha,
.columns.alpha {
    margin-left: 0
}
.column.omega,
.columns.omega {
    margin-right: 0
}
.container .one.column {
    width: 55px
}
.container .two.columns {
    width: 130px
}
.container .three.columns {
    width: 205px
}
.container .four.columns {
    width: 280px
}
.container .five.columns {
    width: 355px
}
.container .six.columns {
    width: 430px
}
.container .seven.columns {
    width: 505px
}
.container .eight.columns {
    width: 580px
}
.container .nine.columns {
    width: 655px
}
.container .ten.columns {
    width: 730px
}
.container .eleven.columns {
    width: 805px
}
.container .twelve.columns {
    width: 880px
}
.container .thirteen.columns {
    width: 955px
}
.container .fourteen.columns {
    width: 1030px
}
.container .fifteen.columns {
    width: 1105px
}
.container .sixteen.columns {
    width: 1180px
}
.container .one-third.column {
    width: 380px
}
.container .two-thirds.column {
    width: 780px
}
.container .one-fifth.column {
    width: 220px
}
.container .offset-by-one {
    padding-left: 75px
}
.container .offset-by-two {
    padding-left: 150px
}
.container .offset-by-three {
    padding-left: 225px
}
.container .offset-by-four {
    padding-left: 300px
}
.container .offset-by-five {
    padding-left: 375px
}
.container .offset-by-six {
    padding-left: 450px
}
.container .offset-by-seven {
    padding-left: 525px
}
.container .offset-by-eight {
    padding-left: 600px
}
.container .offset-by-nine {
    padding-left: 675px
}
.container .offset-by-ten {
    padding-left: 750px
}
.container .offset-by-eleven {
    padding-left: 825px
}
.container .offset-by-twelve {
    padding-left: 900px
}
.container .offset-by-thirteen {
    padding-left: 975px
}
.container .offset-by-fourteen {
    padding-left: 1050px
}
.container .offset-by-fifteen {
    padding-left: 1125px
}
@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .container {
        position: relative;
        width: 960px;
        margin: 0 auto;
        padding: 0
    }
    .container .column,
    .container .columns {
        float: left;
        display: inline;
        margin-left: 10px;
        margin-right: 10px
    }
    .row {
        margin-bottom: 20px
    }
    .column.alpha,
    .columns.alpha {
        margin-left: 0
    }
    .column.omega,
    .columns.omega {
        margin-right: 0
    }
    .container .one.column,
    .container .one.columns {
        width: 40px
    }
    .container .two.columns {
        width: 100px
    }
    .container .three.columns {
        width: 160px
    }
    .container .four.columns {
        width: 220px
    }
    .container .five.columns {
        width: 280px
    }
    .container .six.columns {
        width: 340px
    }
    .container .seven.columns {
        width: 400px
    }
    .container .eight.columns {
        width: 460px
    }
    .container .nine.columns {
        width: 520px
    }
    .container .ten.columns {
        width: 580px
    }
    .container .eleven.columns {
        width: 640px
    }
    .container .twelve.columns {
        width: 700px
    }
    .container .thirteen.columns {
        width: 760px
    }
    .container .fourteen.columns {
        width: 820px
    }
    .container .fifteen.columns {
        width: 880px
    }
    .container .sixteen.columns {
        width: 940px
    }
    .container .one-third.column {
        width: 300px
    }
    .container .two-thirds.column {
        width: 620px
    }
    .container .one-fifth.column {
        width: 172px
    }
    .container .offset-by-one {
        padding-left: 60px
    }
    .container .offset-by-two {
        padding-left: 120px
    }
    .container .offset-by-three {
        padding-left: 180px
    }
    .container .offset-by-four {
        padding-left: 240px
    }
    .container .offset-by-five {
        padding-left: 300px
    }
    .container .offset-by-six {
        padding-left: 360px
    }
    .container .offset-by-seven {
        padding-left: 420px
    }
    .container .offset-by-eight {
        padding-left: 480px
    }
    .container .offset-by-nine {
        padding-left: 540px
    }
    .container .offset-by-ten {
        padding-left: 600px
    }
    .container .offset-by-eleven {
        padding-left: 660px
    }
    .container .offset-by-twelve {
        padding-left: 720px
    }
    .container .offset-by-thirteen {
        padding-left: 780px
    }
    .container .offset-by-fourteen {
        padding-left: 840px
    }
    .container .offset-by-fifteen {
        padding-left: 900px
    }
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
    .container {
        width: 768px
    }
    .container .column,
    .container .columns {
        margin-left: 10px;
        margin-right: 10px
    }
    .column.alpha,
    .columns.alpha {
        margin-left: 0;
        margin-right: 10px
    }
    .column.omega,
    .columns.omega {
        margin-right: 0;
        margin-left: 10px
    }
    .alpha.omega {
        margin-left: 0;
        margin-right: 0
    }
    .container .one.column,
    .container .one.columns {
        width: 28px
    }
    .container .two.columns {
        width: 76px
    }
    .container .three.columns {
        width: 124px
    }
    .container .four.columns {
        width: 172px
    }
    .container .five.columns {
        width: 220px
    }
    .container .six.columns {
        width: 268px
    }
    .container .seven.columns {
        width: 316px
    }
    .container .eight.columns {
        width: 364px
    }
    .container .nine.columns {
        width: 412px
    }
    .container .ten.columns {
        width: 460px
    }
    .container .eleven.columns {
        width: 508px
    }
    .container .twelve.columns {
        width: 556px
    }
    .container .thirteen.columns {
        width: 604px
    }
    .container .fourteen.columns {
        width: 652px
    }
    .container .fifteen.columns {
        width: 700px
    }
    .container .sixteen.columns {
        width: 748px
    }
    .container .one-third.column {
        width: 236px
    }
    .container .two-thirds.column {
        width: 492px
    }
    .container .one-fifth.column {
        width: 133px
    }
    .container .offset-by-one {
        padding-left: 48px
    }
    .container .offset-by-two {
        padding-left: 96px
    }
    .container .offset-by-three {
        padding-left: 144px
    }
    .container .offset-by-four {
        padding-left: 192px
    }
    .container .offset-by-five {
        padding-left: 240px
    }
    .container .offset-by-six {
        padding-left: 288px
    }
    .container .offset-by-seven {
        padding-left: 336px
    }
    .container .offset-by-eight {
        padding-left: 384px
    }
    .container .offset-by-nine {
        padding-left: 432px
    }
    .container .offset-by-ten {
        padding-left: 480px
    }
    .container .offset-by-eleven {
        padding-left: 528px
    }
    .container .offset-by-twelve {
        padding-left: 576px
    }
    .container .offset-by-thirteen {
        padding-left: 624px
    }
    .container .offset-by-fourteen {
        padding-left: 672px
    }
    .container .offset-by-fifteen {
        padding-left: 720px
    }
}
@media only screen and (max-width: 767px) {
    .container {
        width: 300px
    }
    .container .columns,
    .container .column {
        margin: 0
    }
    .container .one.column,
    .container .one.columns,
    .container .two.columns,
    .container .three.columns,
    .container .four.columns,
    .container .five.columns,
    .container .six.columns,
    .container .seven.columns,
    .container .eight.columns,
    .container .nine.columns,
    .container .ten.columns,
    .container .eleven.columns,
    .container .twelve.columns,
    .container .thirteen.columns,
    .container .fourteen.columns,
    .container .fifteen.columns,
    .container .sixteen.columns,
    .container .one-third.column,
    .container .two-thirds.column {
        width: 300px
    }
    .container .one-fifth.column {
        width: 140px
    }
    .container .one-fifth.column:nth-child(2n) {
        margin-left: 20px
    }
    .container .thumbnail.even,
    .container .thumbnail.odd {
        width: 140px !important
    }
    .container div.thumbnail.even {
        clear: left
    }
    .container div.thumbnail.odd {
        margin-left: 20px
    }
    br.product_clear {
        display: none
    }
    .container .offset-by-one,
    .container .offset-by-two,
    .container .offset-by-three,
    .container .offset-by-four,
    .container .offset-by-five,
    .container .offset-by-six,
    .container .offset-by-seven,
    .container .offset-by-eight,
    .container .offset-by-nine,
    .container .offset-by-ten,
    .container .offset-by-eleven,
    .container .offset-by-twelve,
    .container .offset-by-thirteen,
    .container .offset-by-fourteen,
    .container .offset-by-fifteen {
        padding-left: 0
    }
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
    .container {
        width: 420px
    }
    .container .columns,
    .container .column {
        margin: 0
    }
    .container .one.column,
    .container .one.columns,
    .container .two.columns,
    .container .three.columns,
    .container .four.columns,
    .container .five.columns,
    .container .six.columns,
    .container .seven.columns,
    .container .eight.columns,
    .container .nine.columns,
    .container .ten.columns,
    .container .eleven.columns,
    .container .twelve.columns,
    .container .thirteen.columns,
    .container .fourteen.columns,
    .container .fifteen.columns,
    .container .sixteen.columns,
    .container .one-third.column,
    .container .two-thirds.column {
        width: 420px
    }
    .container .one-fifth.column {
        width: 200px
    }
    .container .one-fifth.column:nth-child(2n) {
        margin-left: 20px
    }
    .container .thumbnail.even,
    .container .thumbnail.odd {
        width: 200px !important
    }
    .container div.thumbnail.even {
        clear: left
    }
    .container div.thumbnail.odd {
        margin-left: 20px
    }
    br.product_clear {
        display: none
    }
}
.container:after {
    content: "\0020";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden
}
.clearfix:before,
.clearfix:after,
.row:before,
.row:after {
    content: '\0020';
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0
}
.row:after,
.clearfix:after {
    clear: both
}
.row,
.clearfix {
    zoom: 1
}
.clear {
    clear: both;
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0
}
@media only screen and (max-width: 1199px) {
    input.contact_email[type="email"] {
        width: 390px
    }
}
@media only screen and (max-width: 959px) {
    input.sign_up[type="submit"] {
        margin-left: 0;
        margin-bottom: 1.5em !important;
        width: 100% !important;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    input.contact_email[type="email"] {
        margin-bottom: 1em;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    .collection_menu {
        display: none
    }
    h1.collection_title_tags,
    div.collection_title_tags {
        border-right: 0;
        margin-right: 0;
        padding-right: 0
    }
    .cloudzoom-lens {
        width: 140px;
        height: 120px
    }
}
@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .nav ul li {
        padding: 0 7px 0 7px
    }
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
    .footer a.ss-icon {
        font-size: 42px;
        margin-right: 10px
    }
    .nav ul.menu ul {
        margin-top: 7px
    }
    .featured_links a span {
        font-size: 14px
    }
    .nav ul.menu li {
        padding: 3px 0 3px 3px
    }
}
@media only screen and (max-width: 1023px) {
    .scroll-arrow {
        display: none
    }
    .nav_arrows {
        float: none
    }
    .nav_arrows .prev {
        float: left
    }
    .nav_arrows .next {
        float: right
    }
    .minus,
    .plus {
        display: none
    }
    .minus {
        margin: 0 2px 0 0
    }
    .plus {
        margin: 0 0 0 2px
    }
    .item_title {
        max-width: 280px;
        display: block;
        white-space: initial
    }
    .blog_meta h2,
    h5.sub_title {
        margin-top: 2em
    }
    .promo_banner {
        top: 40px;
        position: absolute;
        font-size: 11px;
        width: 100%
    }
    #header a.mobile_logo {
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 18px;
        line-height: 34px;
        z-index: 0
    }
    #header a.mobile_logo img {
        width: auto;
        max-width: 150px;
        max-height: 30px;
        padding-top: 2px
    }
    .footer_menu li {
        display: block
    }
    .footer a.ss-icon {
        font-size: 36px;
        margin-right: 10px;
        margin-top: 15px
    }
    #cart input.quantity {
        width: 24px
    }
    .is-absolute {
        top: 0px !important
    }
    p.mm-counter {
        right: 20px
    }
    #tag_filter,
    #sort-by,
    .breadcrumb_text {
        margin-bottom: 1em !important;
        clear: both
    }
    .blog_filter {
        margin-top: 1em;
        width: 100% !important
    }
    .section_select {
        text-align: center
    }
    .flex-control-nav {
        bottom: 10px
    }
    .featured_links a span {
        font-size: 14px
    }
    .or {
        text-align: center;
        width: 100%;
        display: inline-block;
        padding-left: 0;
        padding-bottom: 5px
    }
    .mobile_hidden {
        display: none !important
    }
    table tr.order_summary td.label {
        text-align: left
    }
    .feature_image .logo a,
    .feature_image .logo a:hover,
    .feature_image .logo a:visited,
    .feature_image .logo a:active {
        color: #522a2a
    }
    .breadcrumb {
        text-align: center;
        margin-bottom: 1.5em
    }
    .featured_text {
        font-size: 15px;
        line-height: 1.7em;
        text-align: center
    }
    div.content {
        padding-top: 60px
    }
    #header {
        display: block
    }
    .header {
        display: none
    }
    .toggle span {
        display: block
    }
    .toggle_list {
        display: none
    }
    select {
        width: 100%
    }
    .flexslider a.action_button {
        width: initial
    }
    input[type="submit"],
    input[type="reset"],
    input[type="button"],
    input.action_button[type="submit"],
    input.action_button[type="button"],
    .sign_up {
        margin-left: 0;
        width: 100%
    }
    .credits_right {
        text-align: left
    }
    .container .column.thumbnail,
    .container .columns.thumbnail {
        margin-top: 1em
    }
    td {
        padding: 4px !important
    }
    .title_column {
        float: left
    }
    .container div.mobile_only,
    .mobile_only {
        display: block
    }
    span.mobile_only {
        display: inline
    }
    .price_total {
        text-align: right
    }
    .price_total_text {
        display: block
    }
    .update_subtotal,
    .price_total,
    .remove_column,
    .checkout_table_header {
        display: none
    }
    .mobile_right {
        text-align: right
    }
    .quick_shop {
        display: none !important
    }
    .cart_price {
        display: block;
        margin-bottom: 0
    }
    table tr th,
    table tr td {
        padding: 2px
    }
    input.action_button {
        margin-bottom: 1em !important
    }
    .multiple_product_images {
        display: none
    }
    .headline {
        line-height: 1.2em;
        position: relative
    }
    p.subtitle {
        font-size: 1.1em;
        line-height: 1.2em;
        position: relative
    }
    .container .blog_content {
        padding-left: 0;
        border: 0
    }
    .hsContainer .left {
        padding-left: 20px !important
    }
    .hsContainer .right {
        padding-right: 20px !important
    }
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
    #cart textarea {
        width: 220px
    }
    .mobile_hidden {
        display: none !important
    }
    #cart a.action_button.edit_cart,
    #cart .action_button {
        width: 120px
    }
}
@media only screen and (max-width: 479px) {
    .item_title {
        max-width: 180px
    }
    #cart textarea {
        width: 280px
    }
    #cart a.action_button.edit_cart,
    #cart .action_button {
        width: 115px
    }
    .mobile_hidden {
        display: none !important
    }
    .cart_image {
        max-width: 60px;
        padding-right: 10px
    }
    .action_button {
        font-size: 12px
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .collection_title,
    .empty_cart {
        font-size: 90%;
        line-height: 1.5em
    }
    h1,
    h1.home,
    h1.blog_title,
    .title a,
    h2 {
        padding: 0
    }
    .headline {
        font-size: 1.1em
    }
}
@media only screen and (min-device-width: 320px) and (max-device-width: 1024px) {
    html {
        -webkit-text-size-adjust: 100%
    }
}
@media screen and (-ms-high-contrast: active),
(-ms-high-contrast: none) {
    select.currencies {
        position: relative;
        top: 15px
    }
}
@-moz-document url-prefix() {
    #search form input {
        padding: 12px 15px 10px 55px;
        height: 60px
    }
}
.social_buttons,
.social_buttons a {
    color: #363636 !important
}
.social_buttons a {
    padding-left: 5px
}
.social_buttons a:hover {
    color: #786d9c !important
}
@font-face {
    font-family: 'outofthesandbox';
    src: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/outofthesandbox.eot?4241417891200364928");
    src: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/outofthesandbox.eot?%23iefix&4241417891200364928") format("embedded-opentype"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/outofthesandbox.woff?4241417891200364928") format("woff"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/outofthesandbox.ttf?4241417891200364928") format("truetype"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/outofthesandbox.svg%23outofthesandbox?4241417891200364928") format("svg");
    font-weight: normal;
    font-style: normal
}
[class^="icon-"]:before,
[class*=" icon-"]:before,
.icon-menu,
.icon-cart,
.icon-cart,
.icon-search,
.icon-search {
    font-family: 'outofthesandbox';
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    speak: none;
    line-height: 1em;
    text-decoration: inherit;
    display: inline;
    margin-right: .2em;
    text-align: center;
    padding-top: 0;
    -webkit-font-smoothing: antialiased
}
.icon-cart:before {
    content: '\e800'
}
.icon-search:before {
    content: '\e801'
}
.icon-check:before {
    content: '\e802'
}
.icon-bag:before {
    content: '\e803'
}
.icon-right-arrow:before {
    content: '\e804'
}
.icon-menu:before {
    content: '\e80d'
}
.icon-down-arrow:before {
    content: '\e813'
}
.icon-check {
    display: block;
    float: left;
    height: 30px;
    margin-right: 8px;
    clear: both
}
.icon-check-long {
    height: 60px
}
.search-submit {
    position: relative;
    left: 15px;
    float: left;
    top: 112px;
    font-size: 28px;
    cursor: pointer
}
.search-submit::before {
    font-size: 32px
}
.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}
.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}
.animated.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s
}
@-webkit-keyframes bounce {
    0%, 100%, 20%, 50%, 80% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    40% {
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }
    60% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}
@keyframes bounce {
    0%, 100%, 20%, 50%, 80% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    40% {
        -webkit-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        transform: translateY(-30px)
    }
    60% {
        -webkit-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        transform: translateY(-15px)
    }
}
.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce
}
@-webkit-keyframes flash {
    0%, 100%, 50% {
        opacity: 1
    }
    25%,
    75% {
        opacity: 0
    }
}
@keyframes flash {
    0%, 100%, 50% {
        opacity: 1
    }
    25%,
    75% {
        opacity: 0
    }
}
.flash {
    -webkit-animation-name: flash;
    animation-name: flash
}
@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
    50% {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}
@keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
    50% {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
    }
    100% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
}
.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse
}
@-webkit-keyframes rubberBand {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
    30% {
        -webkit-transform: scaleX(1.25) scaleY(0.75);
        transform: scaleX(1.25) scaleY(0.75)
    }
    40% {
        -webkit-transform: scaleX(0.75) scaleY(1.25);
        transform: scaleX(0.75) scaleY(1.25)
    }
    60% {
        -webkit-transform: scaleX(1.15) scaleY(0.85);
        transform: scaleX(1.15) scaleY(0.85)
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}
@keyframes rubberBand {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
    30% {
        -webkit-transform: scaleX(1.25) scaleY(0.75);
        -ms-transform: scaleX(1.25) scaleY(0.75);
        transform: scaleX(1.25) scaleY(0.75)
    }
    40% {
        -webkit-transform: scaleX(0.75) scaleY(1.25);
        -ms-transform: scaleX(0.75) scaleY(1.25);
        transform: scaleX(0.75) scaleY(1.25)
    }
    60% {
        -webkit-transform: scaleX(1.15) scaleY(0.85);
        -ms-transform: scaleX(1.15) scaleY(0.85);
        transform: scaleX(1.15) scaleY(0.85)
    }
    100% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
}
.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand
}
@-webkit-keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }
}
@keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px)
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px)
    }
}
.shake {
    -webkit-animation-name: shake;
    animation-name: shake
}
@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg)
    }
    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }
    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg)
    }
    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg)
    }
    100% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}
@keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        transform: rotate(15deg)
    }
    40% {
        -webkit-transform: rotate(-10deg);
        -ms-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }
    60% {
        -webkit-transform: rotate(5deg);
        -ms-transform: rotate(5deg);
        transform: rotate(5deg)
    }
    80% {
        -webkit-transform: rotate(-5deg);
        -ms-transform: rotate(-5deg);
        transform: rotate(-5deg)
    }
    100% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}
.swing {
    -webkit-transform-origin: top center;
    -ms-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing
}
@-webkit-keyframes tada {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
    10%,
    20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
        transform: scale(0.9) rotate(-3deg)
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg)
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
        transform: scale(1.1) rotate(-3deg)
    }
    100% {
        -webkit-transform: scale(1) rotate(0);
        transform: scale(1) rotate(0)
    }
}
@keyframes tada {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
    10%,
    20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
        -ms-transform: scale(0.9) rotate(-3deg);
        transform: scale(0.9) rotate(-3deg)
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale(1.1) rotate(3deg);
        -ms-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg)
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
        -ms-transform: scale(1.1) rotate(-3deg);
        transform: scale(1.1) rotate(-3deg)
    }
    100% {
        -webkit-transform: scale(1) rotate(0);
        -ms-transform: scale(1) rotate(0);
        transform: scale(1) rotate(0)
    }
}
.tada {
    -webkit-animation-name: tada;
    animation-name: tada
}
@-webkit-keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
        transform: translateX(0%)
    }
    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
        transform: translateX(-25%) rotate(-5deg)
    }
    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
        transform: translateX(20%) rotate(3deg)
    }
    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
        transform: translateX(-15%) rotate(-3deg)
    }
    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
        transform: translateX(10%) rotate(2deg)
    }
    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
        transform: translateX(-5%) rotate(-1deg)
    }
    100% {
        -webkit-transform: translateX(0%);
        transform: translateX(0%)
    }
}
@keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%)
    }
    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
        -ms-transform: translateX(-25%) rotate(-5deg);
        transform: translateX(-25%) rotate(-5deg)
    }
    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
        -ms-transform: translateX(20%) rotate(3deg);
        transform: translateX(20%) rotate(3deg)
    }
    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
        -ms-transform: translateX(-15%) rotate(-3deg);
        transform: translateX(-15%) rotate(-3deg)
    }
    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
        -ms-transform: translateX(10%) rotate(2deg);
        transform: translateX(10%) rotate(2deg)
    }
    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
        -ms-transform: translateX(-5%) rotate(-1deg);
        transform: translateX(-5%) rotate(-1deg)
    }
    100% {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%)
    }
}
.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble
}
@-webkit-keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        transform: scale(0.3)
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
        transform: scale(1.05)
    }
    70% {
        -webkit-transform: scale(0.9);
        transform: scale(0.9)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}
@keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        -ms-transform: scale(0.3);
        transform: scale(0.3)
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
        transform: scale(1.05)
    }
    70% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
}
.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn
}
@-webkit-keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
        transform: translateY(30px)
    }
    80% {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        transform: translateY(30px)
    }
    80% {
        -webkit-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
        transform: translateY(-10px)
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown
}
@-webkit-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
        transform: translateX(30px)
    }
    80% {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
        -ms-transform: translateX(30px);
        transform: translateX(30px)
    }
    80% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px)
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft
}
@-webkit-keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
        transform: translateX(-30px)
    }
    80% {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
        -ms-transform: translateX(-30px);
        transform: translateX(-30px)
    }
    80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px)
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight
}
@-webkit-keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px)
    }
    80% {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        transform: translateY(-30px)
    }
    80% {
        -webkit-transform: translateY(10px);
        -ms-transform: translateY(10px);
        transform: translateY(10px)
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp
}
@-webkit-keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
    25% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95)
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        transform: scale(0.3)
    }
}
@keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
    25% {
        -webkit-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95)
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        -ms-transform: scale(0.3);
        transform: scale(0.3)
    }
}
.bounceOut {
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut
}
@-webkit-keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
@keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown
}
@-webkit-keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        transform: translateX(20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
@keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft
}
@-webkit-keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
@keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight
}
@-webkit-keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
@keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp
}
@-webkit-keyframes fadeIn {
    0% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}
@keyframes fadeIn {
    0% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}
.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn
}
@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown
}
@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig
}
@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}
@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig
}
@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight
}
@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig
}
@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}
@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig
}
@-webkit-keyframes fadeOut {
    0% {
        opacity: 1
    }
    100% {
        opacity: 0
    }
}
@keyframes fadeOut {
    0% {
        opacity: 1
    }
    100% {
        opacity: 0
    }
}
.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut
}
@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }
}
@keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px)
    }
}
.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown
}
@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
@keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig
}
@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px)
    }
}
@keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px)
    }
}
.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft
}
@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
@keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig
}
@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px)
    }
}
@keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px)
    }
}
.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight
}
@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
@keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig
}
@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }
}
@keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px)
    }
}
.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp
}
@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
@keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig
}
@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
    80% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(0.95);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(0.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
    100% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}
@keyframes flip {
    0% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -ms-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -ms-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -ms-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
    80% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(0.95);
        -ms-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(0.95);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(0.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
    100% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -ms-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}
.animated.flip {
    -webkit-backface-visibility: visible;
    -ms-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip
}
@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
        transform: perspective(400px) rotateX(-10deg)
    }
    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg)
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1
    }
}
@keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        -ms-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
        -ms-transform: perspective(400px) rotateX(-10deg);
        transform: perspective(400px) rotateX(-10deg)
    }
    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        -ms-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg)
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        -ms-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1
    }
}
.flipInX {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX
}
@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
        transform: perspective(400px) rotateY(-10deg)
    }
    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg)
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1
    }
}
@keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        -ms-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
        -ms-transform: perspective(400px) rotateY(-10deg);
        transform: perspective(400px) rotateY(-10deg)
    }
    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        -ms-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg)
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        -ms-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1
    }
}
.flipInY {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY
}
@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
}
@keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        -ms-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        -ms-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
}
.flipOutX {
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important
}
@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
}
@keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        -ms-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        -ms-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
}
.flipOutY {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY
}
@-webkit-keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0
    }
    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        transform: translateX(-20%) skewX(30deg);
        opacity: 1
    }
    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        transform: translateX(0%) skewX(-15deg);
        opacity: 1
    }
    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1
    }
}
@keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        -ms-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0
    }
    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        -ms-transform: translateX(-20%) skewX(30deg);
        transform: translateX(-20%) skewX(30deg);
        opacity: 1
    }
    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        -ms-transform: translateX(0%) skewX(-15deg);
        transform: translateX(0%) skewX(-15deg);
        opacity: 1
    }
    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        -ms-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1
    }
}
.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
}
@-webkit-keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0
    }
}
@keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        -ms-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1
    }
    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        -ms-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0
    }
}
.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
}
@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
@keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        -ms-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}
@-webkit-keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
@keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft
}
@-webkit-keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
@keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight
}
@-webkit-keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
@keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft
}
@-webkit-keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
@keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
}
.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight
}
@-webkit-keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0
    }
}
@keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(200deg);
        -ms-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0
    }
}
.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut
}
@-webkit-keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}
@keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}
.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft
}
@-webkit-keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
}
@keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
}
.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight
}
@-webkit-keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
}
@keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }
}
.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft
}
@-webkit-keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}
@keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}
.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight
}
@-webkit-keyframes slideInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes slideInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown
}
@-webkit-keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft
}
@-webkit-keyframes slideInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}
@keyframes slideInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
}
.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}
@-webkit-keyframes slideOutLeft {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
@keyframes slideOutLeft {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px)
    }
}
.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft
}
@-webkit-keyframes slideOutRight {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
@keyframes slideOutRight {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px)
    }
}
.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight
}
@-webkit-keyframes slideOutUp {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
@keyframes slideOutUp {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px)
    }
}
.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp
}
@-webkit-keyframes slideInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}
@keyframes slideInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
}
.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp
}
@-webkit-keyframes slideOutDown {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
@keyframes slideOutDown {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px)
    }
}
.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown
}
@-webkit-keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    40% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        transform: rotate(60deg) translateY(0);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }
    100% {
        -webkit-transform: translateY(700px);
        transform: translateY(700px);
        opacity: 0
    }
}
@keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        -ms-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    40% {
        -webkit-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        -ms-transform: rotate(60deg) translateY(0);
        transform: rotate(60deg) translateY(0);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }
    100% {
        -webkit-transform: translateY(700px);
        -ms-transform: translateY(700px);
        transform: translateY(700px);
        opacity: 0
    }
}
.hinge {
    -webkit-animation-name: hinge;
    animation-name: hinge
}
@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
        transform: translateX(-100%) rotate(-120deg)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg)
    }
}
@keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
        -ms-transform: translateX(-100%) rotate(-120deg);
        transform: translateX(-100%) rotate(-120deg)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        -ms-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg)
    }
}
.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn
}
@-webkit-keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
        transform: translateX(100%) rotate(120deg)
    }
}
@keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        -ms-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
        -ms-transform: translateX(100%) rotate(120deg);
        transform: translateX(100%) rotate(120deg)
    }
}
.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut
}
@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        transform: scale(0.3)
    }
    50% {
        opacity: 1
    }
}
@keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        -ms-transform: scale(0.3);
        transform: scale(0.3)
    }
    50% {
        opacity: 1
    }
}
.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn
}
@-webkit-keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(-2000px);
        transform: scale(0.1) translateY(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(60px);
        transform: scale(0.475) translateY(60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
@keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(-2000px);
        -ms-transform: scale(0.1) translateY(-2000px);
        transform: scale(0.1) translateY(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(60px);
        -ms-transform: scale(0.475) translateY(60px);
        transform: scale(0.475) translateY(60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown
}
@-webkit-keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(-2000px);
        transform: scale(0.1) translateX(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(48px);
        transform: scale(0.475) translateX(48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
@keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(-2000px);
        -ms-transform: scale(0.1) translateX(-2000px);
        transform: scale(0.1) translateX(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(48px);
        -ms-transform: scale(0.475) translateX(48px);
        transform: scale(0.475) translateX(48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft
}
@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(2000px);
        transform: scale(0.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(-48px);
        transform: scale(0.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
@keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(2000px);
        -ms-transform: scale(0.1) translateX(2000px);
        transform: scale(0.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(-48px);
        -ms-transform: scale(0.475) translateX(-48px);
        transform: scale(0.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight
}
@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(2000px);
        transform: scale(0.1) translateY(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(-60px);
        transform: scale(0.475) translateY(-60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
@keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(2000px);
        -ms-transform: scale(0.1) translateY(2000px);
        transform: scale(0.1) translateY(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(-60px);
        -ms-transform: scale(0.475) translateY(-60px);
        transform: scale(0.475) translateY(-60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }
}
.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp
}
@-webkit-keyframes zoomOut {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        transform: scale(0.3)
    }
    100% {
        opacity: 0
    }
}
@keyframes zoomOut {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(0.3);
        -ms-transform: scale(0.3);
        transform: scale(0.3)
    }
    100% {
        opacity: 0
    }
}
.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut
}
@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(-60px);
        transform: scale(0.475) translateY(-60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(2000px);
        transform: scale(0.1) translateY(2000px);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom
    }
}
@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(-60px);
        -ms-transform: scale(0.475) translateY(-60px);
        transform: scale(0.475) translateY(-60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(2000px);
        -ms-transform: scale(0.1) translateY(2000px);
        transform: scale(0.1) translateY(2000px);
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom
    }
}
.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown
}
@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(42px);
        transform: scale(0.475) translateX(42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(-2000px);
        transform: scale(0.1) translateX(-2000px);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}
@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(42px);
        -ms-transform: scale(0.475) translateX(42px);
        transform: scale(0.475) translateX(42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(-2000px);
        -ms-transform: scale(0.1) translateX(-2000px);
        transform: scale(0.1) translateX(-2000px);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center
    }
}
.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft
}
@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(-42px);
        transform: scale(0.475) translateX(-42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(2000px);
        transform: scale(0.1) translateX(2000px);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}
@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateX(-42px);
        -ms-transform: scale(0.475) translateX(-42px);
        transform: scale(0.475) translateX(-42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateX(2000px);
        -ms-transform: scale(0.1) translateX(2000px);
        transform: scale(0.1) translateX(2000px);
        -webkit-transform-origin: right center;
        -ms-transform-origin: right center;
        transform-origin: right center
    }
}
.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight
}
@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(60px);
        transform: scale(0.475) translateY(60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(-2000px);
        transform: scale(0.1) translateY(-2000px);
        -webkit-transform-origin: center top;
        transform-origin: center top
    }
}
@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale(0.475) translateY(60px);
        -ms-transform: scale(0.475) translateY(60px);
        transform: scale(0.475) translateY(60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.1) translateY(-2000px);
        -ms-transform: scale(0.1) translateY(-2000px);
        transform: scale(0.1) translateY(-2000px);
        -webkit-transform-origin: center top;
        -ms-transform-origin: center top;
        transform-origin: center top
    }
}
.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp
}
.delay-0s {
    -moz-animation-delay: 0;
    -webkit-animation-delay: 0;
    animation-delay: 0
}
.delay-025s {
    -moz-animation-delay: .25s;
    -webkit-animation-delay: .25s;
    animation-delay: .25s;
    opacity: 0
}
.delay-05s {
    -moz-animation-delay: .5s;
    -webkit-animation-delay: .5s;
    animation-delay: .5s;
    opacity: 0
}
.delay-075s {
    -moz-animation-delay: .75s;
    -webkit-animation-delay: .75s;
    animation-delay: .75s;
    opacity: 0
}
.delay-1s {
    -moz-animation-delay: 1s;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    opacity: 0
}
.animate_right,
.animate_left,
.animate_up,
.animate_down {
    opacity: 0
}
.ie .animated,
.ie .animate_right,
.ie .animate_left,
.ie .hsContent,
.ie #slide-1 .animated {
    opacity: 1 !important
}
.ie delay-025s,
.ie .delay-0s,
.ie .delay-025s,
.ie .delay-05s,
.ie .delay-075s,
.ie .delay-1s {
    opacity: 1 !important
}
.ie select {
    background-image: none !important
}
@font-face {
    font-family: "SSSandbox";
    src: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/ss-sandbox.eot?4241417891200364928");
    src: url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/ss-sandbox.eot?%23iefix&4241417891200364928") format("embedded-opentype"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/ss-sandbox.woff?4241417891200364928") format("woff"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/ss-sandbox.ttf?4241417891200364928") format("truetype"), url("//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/ss-sandbox.svg%23SSSandbox?4241417891200364928") format("svg");
    font-weight: 400;
    font-style: normal
}
html:hover [class^="ss-"] {
    -ms-zoom: 1
}
.ss-icon,
.footer .ss-icon,
.ss-icon:visited,
.ss-icon.ss-sandbox,
[class^="ss-"]:before,
[class*=" ss-"]:before,
[class^="ss-"].ss-sandbox:before,
[class*=" ss-"].ss-sandbox:before,
[class^="ss-"].right:after,
[class*=" ss-"].right:after,
[class^="ss-"].ss-sandbox.right:after,
[class*=" ss-"].ss-sandbox.right:after {
    font-family: "SSSandbox";
    font-style: normal;
    font-weight: 400;
    text-decoration: none;
    text-rendering: optimizeLegibility;
    white-space: nowrap;
    -moz-font-feature-settings: "liga=1";
    -moz-font-feature-settings: "liga";
    -ms-font-feature-settings: "liga" 1;
    -o-font-feature-settings: "liga";
    font-feature-settings: "liga";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 50px;
    margin: 35px 15px 35px 0;
    display: inline-block
}
.remove {
    font-size: 24px !important;
    margin-right: 0;
    margin-top: 8px
}
.minus,
.plus {
    font-size: 24px;
    opacity: 0.8;
    cursor: pointer;
    position: relative;
    top: -4px
}
.minus:hover,
.plus:hover {
    opacity: 1
}
.minus {
    margin: 0 5px 0 0
}
.plus {
    margin: 0 0 0 5px
}
#password-page-bg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/password-page-background.jpg?4241417891200364928);
    background-color: #000000;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: #ffffff
}
#password-container {
    margin: 0px auto;
    max-width: 100%;
    display: table;
    text-align: center;
    display: table
}
#password-container h1 {
    color: #ffffff
}
.password-page-row {
    display: table-row;
    width: 100%;
    height: 100%;
    margin: 0 auto
}
.password-page-col {
    display: table-cell;
    vertical-align: middle;
    padding: 15px 30px;
    width: 100%
}
.password-page-message {
    color: #ffffff;
    font-size: 25px;
    margin: 0 auto 25px
}
.password-page-follow {
    color: #ffffff
}
.password-logo {
    width: 150px;
    margin: 0px auto
}
.password-message {
    max-width: 600px
}
.hr-small {
    margin: 20px auto;
    width: 50px
}
.ss-password,
.ss-password:hover,
.ss-password:visited {
    font-family: "SSSandbox";
    font-style: normal;
    font-weight: 400;
    text-decoration: none;
    text-rendering: optimizeLegibility;
    white-space: nowrap;
    -moz-font-feature-settings: "liga=1";
    -moz-font-feature-settings: "liga";
    -ms-font-feature-settings: "liga" 1;
    -o-font-feature-settings: "liga";
    font-feature-settings: "liga";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 40px;
    margin: 15px 15px 25px 0;
    display: inline-block;
    color: #ffffff
}
.password-footer {
    margin-top: 15px;
    margin-bottom: 40px;
    font-size: 13px;
    color: #666666;
    text-align: center
}
.powered {
    display: block;
    margin-top: 15px
}
.shopify a {
    background-repeat: no-repeat;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAARCAYAAADUryzEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA0JJREFUeNqMU81vG0UU/83sR73YG+M4xrHj4jj9UCFNSaGlQQUhhFBRpXIo6jEHQFXFAbhy4B/gioTgzgGV7ws5IAoqUgUSoWoIaZJGpGpMHDuptf5a7+fM8nZpJaRy4M0+jd7szO/93u/NsAsX5vFvi6IInHNUq5NnstnsqXp96xur3f392HNlrIcLePHkS8hlTchIJvtVSTOjIaSAwhkiGsXi+BudjjVp28Oj+XzhrPDZh5qqfoIQD5j6wrxHCAJ6UMXVr3pgnB0c9O2843jrE5XMtZER47GTp+bOqfn++d9+Ct5TuLrCGAcjpgnAWEVSdg8HSyWUzTl8v7D08szxSltPB6/OPDWeW/q1caI2O0zfbrThBM7pjdbiz9PG7LsK01epYKiCaMlIQadnHag9UZ2vbuqvl47tVMwcY3fdFjLFCIHksB0bQojCTmfzlWyHf53S0qsyigESMRS0uqtvNbs330nXNHhRAWl3ChnNhLG/jzBy4fg27pGG5TSqWsARV6EGwk+WScgymIQ5auLpyTdRHj2arC//9QXuDpfgeDYkQcgoZixq4DKuAGoo7wEwVg5DD3PVt1EafRzL21/C0HJo9f4gYUO4gZNkFMk5Nkli3wcI4vP7yIvxhsLIIXhBHzfqlzHwWihkDiNjPEwlDJNE/zDABGPQKfR5QAzI8wRU9IWNurWIlJbF+dmP8Ig5ja67Az8cwvWdmCVi4YSMSlTzODjAQxGAvCZkaIpI4MeN97Fc/xbpfXk8WXmNqPcw9C1idR8gKSNN06GYEScZYwZVJ+xj/8hpPJp9HmvNK/Bd6g0zEXfJ9rvEwE0A4qbFLOibimN15RcLR57JVFx7iLGHpvFs9RJ8QZvofmzsXoEXDqAqWiIiyUaAUSIkBTVVY1BuXuth6rhxcaxizDb619EcrGPg7+JG8zJWdj8HZwplk7hTHyDiKrU5BVWXyKT57ncfNz9TRBjxrRWn3/zT2+7seV7DWuabnR+MTrCm6ikNnLLEL3R720dmQkMqFz8dia3rdmvhg8an7MH3hZRhKuVsQTtcPmCcGK+lZvLl1JEdK9T7PW9t75a72L7tXh3sBbdEELXxP00h1//rx98CDACS7p3N/ZPUwQAAAABJRU5ErkJggg==);
    padding-left: 21px;
    color: #9c9c9c;
    text-decoration: none
}
.password-footer a {
    color: #9c9c9c;
    text-decoration: none
}
.controls {
    display: block;
    margin: 1em 2em 1em auto;
    text-align: right;
    text-transform: uppercase
}
#open-me a {
    color: #ffffff
}
.close-me a {
    color: #000
}
.modalbox {
    position: absolute;
    height: 100%;
    top: -1em;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 0;
    z-index: -9999
}
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    max-height: 100%;
    top: 0;
    left: 0;
    background: #fff;
    background: rgba(255, 255, 255, 0.95)
}
.overlay-close {
    width: 150px;
    height: 50px;
    position: absolute;
    right: 10px;
    top: 10px;
    border: 1px solid #000;
    font-size: 14px
}
.overlay-data {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.5s;
    transition: opacity 0.5s;
    visibility: 0s 0.5s;
    transition: opacity 0.5s, visibility 0s 0.5s
}
.overlay-open {
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.5s;
    transition: opacity 0.5s
}
.inputbox {
    margin: 0px auto;
    max-width: 100%;
    display: table;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    -ms-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: #000
}
.storefront-password-form label {
    font-size: 0.9em;
    margin: 0 0 1em 0
}
.storefront-password-form .actions {
    display: inline-block
}
.storefront-password-form #password {
    width: 80%;
    display: inline-block
}
#owner {
    font-size: 0.9em;
    margin-top: -1em;
    opacity: 0.8
}
.pass-close {
    color: #000 !important;
    padding: 0 !important;
    margin: 1em !important;
    position: inherit !important
}
@media screen and (min-width: 320px) and (max-width: 440px) and (max-height: 667px) {
    .modalbox {
        display: block;
        width: 414px !important;
        max-width: 100%;
        text-align: center
    }
    .pass-close {
        display: block;
        margin: 0.65em -0.15em 1em 0 !important
    }
}
.hsContainer {
    display: table;
    table-layout: fixed;
    width: 100%;
    overflow: hidden;
    position: relative;
    opacity: 1;
    z-index: 1
}
.hsContent {
    max-width: 1180px;
    margin: -150px auto 0 auto;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    float: none
}
.hsContainer .left {
    text-align: left;
    padding-left: 60px;
    float: none
}
.hsContainer .right {
    text-align: right;
    padding-right: 60px;
    float: none
}
.hsContainer a.action_button {
    padding: 10px 40px
}
.bcg {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover
}
#slide-1 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_1.jpg?4241417891200364928)
}
#slide-1 .hsContainer {
    height: 600px
}
#slide-2 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_2.jpg?4241417891200364928)
}
#slide-2 .hsContainer {
    height: 600px
}
#slide-3 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_3.jpg?4241417891200364928)
}
#slide-3 .hsContainer {
    height: 600px
}
#slide-4 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_4.jpg?4241417891200364928)
}
#slide-4 .hsContainer {
    height: 600px
}
#slide-5 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_5.jpg?4241417891200364928)
}
#slide-5 .hsContainer {
    height: 550px
}
#slide-6 .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_6.jpg?4241417891200364928)
}
#slide-6 .hsContainer {
    height: 550px
}
#slide-blog .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_blog.jpg?4241417891200364928)
}
#slide-blog .hsContainer {
    height: 400px
}
#slide-contact .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_contact.jpg?4241417891200364928)
}
#slide-contact .hsContainer {
    height: 400px
}
#slide-collection .bcg {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/slideshow_collection.jpg?4241417891200364928)
}
#slide-collection .hsContainer {
    height: 400px
}
#slide-1,
#slide-blog,
#slide-contact,
#slide-collection {
    background-color: #1b1f23
}
@media only screen and (max-width: 767px) {
    .delay-0s,
    .delay-025s,
    .delay-05s,
    .delay-075s,
    .delay-1s,
    .animate_right,
    .animate_left,
    .animate_up,
    .animate_down {
        opacity: 1
    }
    .bcg {
        background-size: cover;
        background-attachment: scroll
    }
    #slide-1,
    #slide-blog,
    #slide-contact,
    #slide-collection {
        margin-top: 40px
    }
    #slide-1 .hsContainer {
        height: 240px
    }
    #slide-2 .hsContainer {
        height: 400px
    }
    #slide-3 .hsContainer {
        height: 400px
    }
    #slide-4 .hsContainer {
        height: 400px
    }
    #slide-5 .hsContainer {
        height: 366.66667px
    }
    #slide-6 .hsContainer {
        height: 366.66667px
    }
    #slide-blog .hsContainer {
        height: 266.66667px
    }
    #slide-contact .hsContainer {
        height: 266.66667px
    }
    #slide-collection .hsContainer {
        height: 266.66667px
    }
    .hsContainer a.action_button {
        padding: 2px 10px;
        font-size: 14px
    }
}
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
    .bcg {
        background-size: cover;
        background-attachment: scroll
    }
}

.purple-background {
    background: #5a4a91
}
.arrow-container {
    position: relative
}
.top-arrow {
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
    margin: 0 auto
}
.purple-arrow {
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 20px solid #5a4a91
}
.white-arrow {
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 20px solid white
}
.headline,
.subtitle,
p.headline,
p.subtitle {
    text-transform: none;
    text-align: center;
    letter-spacing: normal
}
.subtitle,
p.subtitle {
    font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif
}
.headline {
    margin-bottom: 0px
}
@media (min-width: 0px) and (max-width: 600px) {
    .headline {
        font-size: 42px
    }
}
.container .headline {
    color: #5a4a91
}
.purple-background .headline,
.purple-background .subtitle,
.purple-background .title {
    color: #FFF
}
body {
    background: #FFF
}
@media (min-width: 0px) and (max-width: 1024px) {
    #header {
        background: #5a4a91
    }
    #header .icon-menu:before,
    #header .icon-cart:before {
        color: #FFF
    }
}
.header.mm-fixed-top .feature_image .header .nav a:hover,
.header.mm-fixed-top .nav a.active,
.header.mm-fixed-top .header_bar a.active,
.header.mm-fixed-top .feature_image .header .nav a:focus,
#header .feature_image .header .nav a:hover,
#header .nav a.active,
#header .header_bar a.active,
#header .feature_image .header .nav a:focus {
    color: #d27bc7 !important
}
.column img {
    max-width: 100%;
    height: auto
}
.colour-swatches {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    -webkit-justify-content: center;
    justify-content: center
}
.colour-swatches .colour-swatch {
    min-width: 25%
}
@media (min-width: 600px) {
    .colour-swatches .colour-swatch {
        min-width: 20%
    }
}
@media (min-width: 1024px) {
    .colour-swatches .colour-swatch {
        min-width: 9%
    }
}
.one-fifth {
    width: 100%
}
@media (min-width: 600px) {
    .one-fifth {
        width: 50%;
        width: calc(50% - 20px)
    }
}
@media (min-width: 1024px) {
    .one-fifth {
        width: 18%;
        width: calc(20% - 20px)
    }
}
.one-thirteenth {
    width: 25%
}
@media (min-width: 600px) {
    .one-thirteenth {
        width: 5%;
        width: calc(9.09% - 20px)
    }
}
.one-third {
    width: 100%
}
@media (min-width: 600px) {
    .one-third {
        width: 30%;
        margin: 1.5% !important
    }
}
.one-quarter {
    width: 100%
}
@media (min-width: 600px) {
    .one-quarter {
        width: 45%;
        margin: 2.5% !important
    }
}
@media (min-width: 1024px) {
    .one-quarter {
        width: 22%;
        margin: 1.5% !important
    }
}
@media (min-width: 479px) and (max-width: 600px) {
    .main.container {
        margin-top: 40px
    }
}
@media (min-width: 600px) {
    .main.container {
        margin-top: 100px
    }
}
.main.container h1,
.main.container .feature_divider {
    color: #5a4a91;
    border-color: #5a4a91
}
#slide-2 .subtitle,
#slide-3 .subtitle {
    font-size: 24px
}
#featured_links {
    padding-top: 30px
}
#feature h2 {
    font-size: 16px;
    text-transform: none;
    margin-bottom: 0
}
@media (min-width: 0px) and (max-width: 600px) {
    #feature h2 {
        font-size: 1.8em
    }
}
#feature p {
    font-size: 14px
}
.see-it-in-action {
    text-align: center;
    padding: 20px 0
}
.front-page-modal {
    display: none;
    padding: 40px
}
.colours-collection .thumbnail img {
    margin-bottom: 0
}
.colours-collection .title {
    font-size: 14px
}
.uses-blog {
    margin-top: 20px
}
.uses-article {
    padding-bottom: 100%;
    margin-bottom: 20px
}
.uses-article .inner-content {
    width: 100%;
    height: 100%;
    line-height: 120%;
    background-size: cover;
    position: absolute
}
@media (min-width: 600px) {
    .uses-article--three {
        padding-bottom: 33%
    }
}
@media (min-width: 600px) {
    .uses-article--four {
        padding-bottom: 25%
    }
}
.uses-article--four:nth-of-type(4n) {
    margin-right: 0
}
.uses-article--four:nth-of-type(4n+1) {
    margin-left: 0
}
.uses-article__title {
    background: rgba(0, 0, 0, 0.7);
    padding: 10px 5px;
    text-align: center;
    width: calc(100% - 10px);
    position: absolute;
    bottom: 0;
    font-family: "Nunito";
    color: #FFF;
    font-size: 15px
}
.uses-article__title a {
    color: #FFF
}
@media (min-width: 0px) and (max-width: 600px) {
    .uses-article__title {
        font-size: 1.5em;
        padding-top: 1em;
        padding-bottom: 1em
    }
}
.featured_sizes .title {
    font-weight: bold
}
.featured_sizes .size-description {
    color: #FFF !important;
    font-size: 14px !important
}
.featured_sizes .loop-image {
    align-items: bottom
}
.featured_sizes .loop-image img {
    width: 100%;
    height: auto
}
.featured_sizes .see-more-button {
    display: inline-block;
    width: auto;
    background: #8686b2;
    color: #FFF !important;
    margin: 0 auto;
    font-size: 14px;
    padding: 0.8em 1.8em
}
.featured_sizes .see-more-button:hover {
    background: #7676a8
}
.accordion dt,
.accordion dd {
    padding: 10px;
    border-bottom: 1px solid #eee
}
.accordion dt:last-of-type,
.accordion dd:last-of-type {
    border-bottom: 1px solid #eee
}
.accordion dt li,
.accordion dd li {
    margin-bottom: 0
}
.accordion dt h4,
.accordion dd h4 {
    margin-bottom: 0
}
.accordion dt {
    position: relative;
    padding-left: 0
}
.accordion dt small.right {
    position: absolute;
    right: 20px
}
.accordion dt:hover {
    cursor: pointer
}
.accordion dt a {
    display: inline-block;
    padding-let: 20px
}
.accordion dd {
    border-top: 0;
    font-size: 1em;
    line-height: 1.2em;
    font-size: 1.2em;
    padding-top: 15px;
    padding-bottom: 20px
}
.accordion dd:last-of-type {
    border-top: 1px solid white;
    position: relative;
    top: -1px
}
.accordion.accordion--collection dt {
    border-radius: 0;
    background: transparent !important;
    margin-bottom: 0
}
.accordion.accordion--collection dt:first-of-type {
    border-top: 1px solid #ddd
}
.filter-collection {
    border: 1px solid #ddd;
    margin-bottom: 30px
}
.filter-collection ul {
    margin-bottom: 0;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 5px
}
.filter-collection li {
    margin-bottom: 0;
    line-height: 18px
}
.filter-collection a {
    left: 0;
    font-size: 14px;
    display: inline-block;
    vertical-align: middle;
    border-left: 0;
    padding-left: 5px;
    position: relative
}
.filter-collection a:hover {
    color: #5a4a91;
    border-left: 0;
    border-left-color: #FFF
}
.filter-collection .sidebar-filter--active {
    font-weight: bold
}
.filter-collection .sidebar-filter--active:before {
    background-color: #5a4a91;
    background-clip: content-box;
    background-size: cover
}
.filter-collection .sidebar-filter--active:hover:before {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/filter-cross.png?4565058468623237409)
}
.filter-collection--toggler a:before {
    content: " ";
    height: 10px;
    width: 10px;
    margin-right: 5px;
    display: inline-block;
    border: #FFF 2px solid;
    vertical-align: middle;
    -webkit-box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.75)
}
.filter-collection--toggler a:after {
    display: none;
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 14px;
    height: 14px
}
.sidebar h4 {
    text-transform: none;
    background: #eee;
    color: #5a4a91;
    padding: 5px 10px;
    margin-bottom: 0
}
.sidebar h4 i {
    float: right;
    margin-top: 5px
}
@media (min-width: 600px) {
    .sidebar h4 i {
        margin-top: 10px
    }
}
h4.filter-collection__header {
    background: #5a4a91;
    color: #FFF
}
.sidebar-colors a:before {
    display: none !important
}
.sidebar-colors li {
    display: inline-block;
    height: 20px;
    width: 20px;
    padding: 5px;
    padding-right: 6px;
    padding-bottom: 6px
}
.sidebar-filter {
    font-size: 14px
}
.sidebar-filter--active {
    font-weight: bold
}
.sidebar .sidebar-color {
    display: block;
    height: 20px;
    width: 20px;
    border: 1px solid #000 !important;
    left: 0;
    padding-left: 0;
    box-sizing: border-box
}
.sidebar .sidebar-color.sidebar-filter--active {
    box-sizing: content-box;
    -webkit-box-shadow: 0px 0px 0px 5px #5a4a91;
    -moz-box-shadow: 0px 0px 0px 5px #5a4a91;
    box-shadow: 0px 0px 0px 5px #5a4a91
}
.sidebar .sidebar-color.sidebar-filter--active:hover {
    padding-left: 0;
    border-left: 1px solid #000;
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/filter-cross.png?4565058468623237409);
    background-size: cover;
    background-repeat: none;
    -webkit-box-shadow: 0px 0px 0px 5px #FFF;
    -moz-box-shadow: 0px 0px 0px 5px #FFF;
    box-shadow: 0px 0px 0px 5px #FFF
}
.sidebar-color--black {
    background: #000
}
.sidebar-color--cerise {
    background: #ef4a81
}
.sidebar-color--hot-pink {
    background: #ef4a81
}
.sidebar-color--gold {
    background: #c4a774
}
.sidebar-color--ivory {
    background: #ebeddc
}
.sidebar-color--natural-kraft {
    background: #bfae8f
}
.sidebar-color--orange {
    background: #ed7b00
}
.sidebar-color--pale-blue {
    background: #89b2e0
}
.sidebar-color--pale-pink {
    background: #f5d1d1
}
.sidebar-color--purple {
    background: #553980
}
.sidebar-color--red {
    background: #ed0000
}
.sidebar-color--silver {
    background: #d2d2d2
}
.sidebar-color--turquoise {
    background: #00edc9
}
.product_form {
    padding: 20px;
    background: #eee
}
.product_name {
    color: #222 !important;
    text-transform: none
}
.price-label:first-of-type {
    width: 130px
}
.price,
.was_price,
.save_price,
.price-label {
    font-size: 14px;
    display: inline-block;
    line-height: 22px
}
.inline_purchase {
    display: block;
    margin-top: 10px
}
@media (min-width: 1024px) {
    .inline_purchase {
        display: inline-block;
        margin-top: 25px
    }
}
.changeable-ribbon {
    margin-bottom: 20px
}
.changeable-ribbon a {
    padding: 10px 20px !important
}
.changeable-ribbon img {
    float: right;
    width: 110px;
    height: auto
}
@media (min-width: 0px) and (max-width: 600px) {
    .changeable-ribbon a {
        height: auto
    }
}
.description--read-more {
    display: none
}
.description--read-more.active {
    display: block
}
.action_button {
    font-size: 16px;
    text-align: center
}
@media (min-width: 0px) and (max-width: 600px) {
    .action_button {
        font-size: 16px;
        display: block !important
    }
}
a.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"],
.action_button,
a.action_button,
input.action_button[type="submit"],
input.action_button[type="button"] {
    background: #5a4a91;
    border-radius: 6px;
    margin: 0.25em;
    -webkit-box-shadow: 0 3px 0 #45396f;
    -moz-box-shadow: 0 3px 0 #45396f;
    -o-box-shadow: 0 3px 0 #45396f;
    -ms-box-shadow: 0 3px 0 #45396f;
    box-shadow: 0 3px 0 #45396f;
    -webkit-transition: transform 0.25s, box-shadow 0.25s;
    -moz-transition: transform 0.25s, box-shadow 0.25s;
    -o-transition: transform 0.25s, box-shadow 0.25s;
    -ms-transition: transform 0.25s, box-shadow 0.25s;
    transition: transform 0.25s, box-shadow 0.25s
}
@media (min-width: 0px) and (max-width: 1024px) {
    a.button,
    button,
    input[type="submit"],
    input[type="reset"],
    input[type="button"],
    .action_button,
    a.action_button,
    input.action_button[type="submit"],
    input.action_button[type="button"] {
        margin-top: 1em
    }
}
a.button:focus,
a.button:hover,
button:focus,
button:hover,
input[type="submit"]:focus,
input[type="submit"]:hover,
input[type="reset"]:focus,
input[type="reset"]:hover,
input[type="button"]:focus,
input[type="button"]:hover,
.action_button:focus,
.action_button:hover,
a.action_button:focus,
a.action_button:hover,
input.action_button[type="submit"]:focus,
input.action_button[type="submit"]:hover,
input.action_button[type="button"]:focus,
input.action_button[type="button"]:hover {
    background: #7260ae
}
a.button:active,
button:active,
input[type="submit"]:active,
input[type="reset"]:active,
input[type="button"]:active,
.action_button:active,
a.action_button:active,
input.action_button[type="submit"]:active,
input.action_button[type="button"]:active {
    transform: translateY(2px);
    box-shadow: 0 2px 0 #45396f
}
a.button.sign_up,
button.sign_up,
input[type="submit"].sign_up,
input[type="reset"].sign_up,
input[type="button"].sign_up,
.action_button.sign_up,
a.action_button.sign_up,
input.action_button[type="submit"].sign_up,
input.action_button[type="button"].sign_up {
    background: #ff5a5f;
    color: #ffffff;
    -webkit-box-shadow: 0 3px 0 #ff272e;
    -moz-box-shadow: 0 3px 0 #ff272e;
    -o-box-shadow: 0 3px 0 #ff272e;
    -ms-box-shadow: 0 3px 0 #ff272e;
    box-shadow: 0 3px 0 #ff272e
}
a.button.sign_up:focus,
a.button.sign_up:hover,
button.sign_up:focus,
button.sign_up:hover,
input[type="submit"].sign_up:focus,
input[type="submit"].sign_up:hover,
input[type="reset"].sign_up:focus,
input[type="reset"].sign_up:hover,
input[type="button"].sign_up:focus,
input[type="button"].sign_up:hover,
.action_button.sign_up:focus,
.action_button.sign_up:hover,
a.action_button.sign_up:focus,
a.action_button.sign_up:hover,
input.action_button[type="submit"].sign_up:focus,
input.action_button[type="submit"].sign_up:hover,
input.action_button[type="button"].sign_up:focus,
input.action_button[type="button"].sign_up:hover {
    background: #ff8d90
}
a.button.sign_up:active,
button.sign_up:active,
input[type="submit"].sign_up:active,
input[type="reset"].sign_up:active,
input[type="button"].sign_up:active,
.action_button.sign_up:active,
a.action_button.sign_up:active,
input.action_button[type="submit"].sign_up:active,
input.action_button[type="button"].sign_up:active {
    transform: translateY(2px);
    box-shadow: 0 2px 0 #ff272e
}
a.button.action_button--secondary,
button.action_button--secondary,
input[type="submit"].action_button--secondary,
input[type="reset"].action_button--secondary,
input[type="button"].action_button--secondary,
.action_button.action_button--secondary,
a.action_button.action_button--secondary,
input.action_button[type="submit"].action_button--secondary,
input.action_button[type="button"].action_button--secondary {
    background: #b168a8;
    color: #ffffff;
    -webkit-box-shadow: 0 3px 0 #984e8f;
    -moz-box-shadow: 0 3px 0 #984e8f;
    -o-box-shadow: 0 3px 0 #984e8f;
    -ms-box-shadow: 0 3px 0 #984e8f;
    box-shadow: 0 3px 0 #984e8f
}
a.button.action_button--secondary:focus,
a.button.action_button--secondary:hover,
button.action_button--secondary:focus,
button.action_button--secondary:hover,
input[type="submit"].action_button--secondary:focus,
input[type="submit"].action_button--secondary:hover,
input[type="reset"].action_button--secondary:focus,
input[type="reset"].action_button--secondary:hover,
input[type="button"].action_button--secondary:focus,
input[type="button"].action_button--secondary:hover,
.action_button.action_button--secondary:focus,
.action_button.action_button--secondary:hover,
a.action_button.action_button--secondary:focus,
a.action_button.action_button--secondary:hover,
input.action_button[type="submit"].action_button--secondary:focus,
input.action_button[type="submit"].action_button--secondary:hover,
input.action_button[type="button"].action_button--secondary:focus,
input.action_button[type="button"].action_button--secondary:hover {
    background: #c28abb
}
a.button.action_button--secondary:active,
button.action_button--secondary:active,
input[type="submit"].action_button--secondary:active,
input[type="reset"].action_button--secondary:active,
input[type="button"].action_button--secondary:active,
.action_button.action_button--secondary:active,
a.action_button.action_button--secondary:active,
input.action_button[type="submit"].action_button--secondary:active,
input.action_button[type="button"].action_button--secondary:active {
    transform: translateY(2px);
    box-shadow: 0 2px 0 #984e8f
}
a.button.action_button--tertiary,
button.action_button--tertiary,
input[type="submit"].action_button--tertiary,
input[type="reset"].action_button--tertiary,
input[type="button"].action_button--tertiary,
.action_button.action_button--tertiary,
a.action_button.action_button--tertiary,
input.action_button[type="submit"].action_button--tertiary,
input.action_button[type="button"].action_button--tertiary {
    background: #ffffff;
    color: #5a4a91;
    -webkit-box-shadow: 0 3px 0 #e6e6e6;
    -moz-box-shadow: 0 3px 0 #e6e6e6;
    -o-box-shadow: 0 3px 0 #e6e6e6;
    -ms-box-shadow: 0 3px 0 #e6e6e6;
    box-shadow: 0 3px 0 #e6e6e6
}
a.button.action_button--tertiary:focus,
a.button.action_button--tertiary:hover,
button.action_button--tertiary:focus,
button.action_button--tertiary:hover,
input[type="submit"].action_button--tertiary:focus,
input[type="submit"].action_button--tertiary:hover,
input[type="reset"].action_button--tertiary:focus,
input[type="reset"].action_button--tertiary:hover,
input[type="button"].action_button--tertiary:focus,
input[type="button"].action_button--tertiary:hover,
.action_button.action_button--tertiary:focus,
.action_button.action_button--tertiary:hover,
a.action_button.action_button--tertiary:focus,
a.action_button.action_button--tertiary:hover,
input.action_button[type="submit"].action_button--tertiary:focus,
input.action_button[type="submit"].action_button--tertiary:hover,
input.action_button[type="button"].action_button--tertiary:focus,
input.action_button[type="button"].action_button--tertiary:hover {
    background: #fff
}
a.button.action_button--tertiary:active,
button.action_button--tertiary:active,
input[type="submit"].action_button--tertiary:active,
input[type="reset"].action_button--tertiary:active,
input[type="button"].action_button--tertiary:active,
.action_button.action_button--tertiary:active,
a.action_button.action_button--tertiary:active,
input.action_button[type="submit"].action_button--tertiary:active,
input.action_button[type="button"].action_button--tertiary:active {
    transform: translateY(2px);
    box-shadow: 0 2px 0 #e6e6e6
}
a.button.action_button--default,
button.action_button--default,
input[type="submit"].action_button--default,
input[type="reset"].action_button--default,
input[type="button"].action_button--default,
.action_button.action_button--default,
a.action_button.action_button--default,
input.action_button[type="submit"].action_button--default,
input.action_button[type="button"].action_button--default {
    background: #f2f2f2;
    color: #aaa;
    -webkit-box-shadow: 0 3px 0 #d8d8d8;
    -moz-box-shadow: 0 3px 0 #d8d8d8;
    -o-box-shadow: 0 3px 0 #d8d8d8;
    -ms-box-shadow: 0 3px 0 #d8d8d8;
    box-shadow: 0 3px 0 #d8d8d8
}
a.button.action_button--default:focus,
a.button.action_button--default:hover,
button.action_button--default:focus,
button.action_button--default:hover,
input[type="submit"].action_button--default:focus,
input[type="submit"].action_button--default:hover,
input[type="reset"].action_button--default:focus,
input[type="reset"].action_button--default:hover,
input[type="button"].action_button--default:focus,
input[type="button"].action_button--default:hover,
.action_button.action_button--default:focus,
.action_button.action_button--default:hover,
a.action_button.action_button--default:focus,
a.action_button.action_button--default:hover,
input.action_button[type="submit"].action_button--default:focus,
input.action_button[type="submit"].action_button--default:hover,
input.action_button[type="button"].action_button--default:focus,
input.action_button[type="button"].action_button--default:hover {
    background: #e5e5e5
}
a.button.action_button--default:active,
button.action_button--default:active,
input[type="submit"].action_button--default:active,
input[type="reset"].action_button--default:active,
input[type="button"].action_button--default:active,
.action_button.action_button--default:active,
a.action_button.action_button--default:active,
input.action_button[type="submit"].action_button--default:active,
input.action_button[type="button"].action_button--default:active {
    transform: translateY(2px);
    box-shadow: 0 2px 0 #d8d8d8
}
a.button.action_button--small,
button.action_button--small,
input[type="submit"].action_button--small,
input[type="reset"].action_button--small,
input[type="button"].action_button--small,
.action_button.action_button--small,
a.action_button.action_button--small,
input.action_button[type="submit"].action_button--small,
input.action_button[type="button"].action_button--small {
    padding: 0.25em 1em !important;
    display: inline-block
}
a.button.action_button--tiny,
button.action_button--tiny,
input[type="submit"].action_button--tiny,
input[type="reset"].action_button--tiny,
input[type="button"].action_button--tiny,
.action_button.action_button--tiny,
a.action_button.action_button--tiny,
input.action_button[type="submit"].action_button--tiny,
input.action_button[type="button"].action_button--tiny {
    font-size: .8em;
    padding: 0.25em 1.2em !important;
    display: inline-block
}
@media (min-width: 0px) and (max-width: 600px) {
    .quantity-left {
        padding-bottom: 10px
    }
}
.current_price {
    color: #222;
    font-weight: bold;
    font-size: 16px
}
.related-title {
    font-weight: lighter;
    letter-spacing: 1px
}
div.share-button {
    float: none
}
.at-share-btn-elements {
    text-align: center;
    margin-bottom: 20px
}
.more-details .container {
    padding: 0
}
@media (min-width: 0px) and (max-width: 1024px) {
    .more-details .spt-tab-title {
        display: block;
        margin-bottom: 10px
    }
    .more-details .spt-tab-title a {
        border-radius: 6px;
        border: 1px solid #ddd
    }
    .more-details .spt-tab-title a.active {
        border-bottom-color: #ddd
    }
}
@media (min-width: 600px) and (max-width: 1024px) {
    .more-details .spt-tab-title {
        width: 48%;
        float: left;
        margin-right: 1%
    }
}
.more-details .spt-tab-title {
    background: #f2f2f2
}
.more-details__header {
    background: #eeeeee;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    padding-top: 25px
}
.more-details__header ul {
    margin-left: 0;
    margin-bottom: 0
}
.more-details__header li {
    display: block;
    list-style-type: none;
    margin-bottom: -1px
}
@media (min-width: 600px) {
    .more-details__header li {
        display: inline-block
    }
}
.more-details__header a {
    color: #000;
    padding: 10px 20px;
    display: block;
    transition: ease 300ms all;
    border: 1px solid #eee;
    border-bottom: 1px solid #ccc
}
.more-details__header a.active {
    border: 1px solid #ccc;
    background: #FFF;
    border-bottom-color: #FFF
}
.more-details__container {
    padding: 25px 0
}
.more-details__description {
    transition: all 300ms ease;
    opacity: 0;
    display: none
}
.more-details__description.active {
    opacity: 1;
    display: block
}
.more-details__description table {
    table-layout: auto;
    width: auto
}
.more-details__description table th,
.more-details__description table td {
    width: 1px;
    white-space: nowrap
}
body.product-ribbonroll .main.content,
body.product .main.content {
    margin-top: 0px;
    padding-bottom: 25px
}
@media (min-width: 1024px) {
    body.product-ribbonroll .main.content,
    body.product .main.content {
        margin-top: 80px
    }
}
body.product-ribbonroll .description li,
body.product .description li {
    margin-bottom: 0
}
.handheld-product-title .product_name {
    clear: none
}
@media only screen and (max-width: 479px) {
    .handheld-product-title .product_name {
        margin-top: .75em
    }
    .nav_arrows .prev {
        margin-right: 0 !important
    }
    .nav_arrows .next {
        margin-right: 0 !important
    }
}
.changeable-ribbon {
    position: relative;
    overflow: hidden;
    padding-top: 40px;
    text-align: center;
    border: 1px solid #e6e6e6;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.05)
}
.changeable-ribbon .changeable-ribbon__strip {
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    width: 100%
}
.changeable-ribbon p {
    margin-bottom: 0.5em;
    line-height: 1.25em;
    font-size: 16px
}
.changeable-ribbon a.action_button {
    margin-top: 10px
}
.sign_up.action_button {
    background: #ff5a5f !important
}
.buy-sample {
    line-height: 20px
}
.spt-box ul.spt-tabs li {
    margin: 0 2px
}
.spt-box ul.spt-tabs li a {
    border: 0;
    background: transparent;
    color: #007a87
}
.spt-box ul.spt-tabs li a.active {
    border-color: #ddd !important;
    border-top-width: 1px;
    border-style: solid;
    border-right-width: 1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
}
div.printing-types div {
    border-bottom: 1px solid #EEE;
    text-align: center;
    margin-bottom: 30px
}
.page-printing .form-label-left,
.page-bespoke .form-label-left {
    width: 100% !important
}
.gallery--printing,
.gallery--bespoke {
    margin: 20px auto
}
.gallery--printing span,
.gallery--bespoke span {
    text-align: center;
    padding-bottom: 10px;
    display: block
}
.gallery--printing .one-quarter,
.gallery--bespoke .one-quarter {
    margin-bottom: 10px
}
.share-button.sharer-0 {
    margin-top: 50px
}
.spt-accordian>li {
    margin-bottom: 5px !important;
    border: 0px !important
}
.spt-accordian>li>.spt-title,
.accordion dt {
    border-color: #ddd !important;
    background: #eee !important;
    color: #007a87 !important;
    text-transform: none !important;
    display: block;
    border-radius: 5px
}
.spt-accordian>li>.spt-title a,
.accordion dt a {
    color: #007a87 !important;
    font-size: 18px;
    padding-left: 10px
}
.spt-accordian>li>.spt-title small,
.accordion dt small {
    font-size: 70% !important;
    color: #ccc !important
}
.spt-accordian>li>.spt-title:after,
.accordion dt:after {
    font-size: 70% !important;
    color: #ccc !important;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg)
}
.accordion dt {
    margin-bottom: 5px
}
.spt-accordian>li>.spt-desc {
    border: 0 !important;
    border-left: 2px #eee solid !important;
    margin: 10px
}
.about-team img {
    height: 320px;
    width: auto
}
.anchor {
    position: relative;
    top: -100px;
    visibility: hidden;
    display: block
}
.footer h6 {
    color: #FFF
}
@media (min-width: 0px) and (max-width: 1024px) {
    .footer h6 {
        margin-top: 2em
    }
}
.footer .container:first-of-type {
    padding-bottom: 0px
}
.footer .container:last-of-type {
    padding-top: 20px
}
.footer .address {
    color: #FFF
}
.footer .footer__bottom {
    margin-top: 20px;
    padding-top: 20px;
    text-align: center;
    border-top: 1px solid #7f8c8d
}
.footer input.contact_email[type="email"] {
    width: 100%
}
.footer input.sign_up[type="submit"] {
    margin-left: 0
}
.footer .footer_menu li {
    display: block;
    margin-bottom: 0px
}
.footer .footer_menu a {
    text-transform: none;
    margin-bottom: 0px;
    font-size: 14px;
    font-weight: normal
}
.nav ul li .cart-button {
    position: relative;
    padding-left: 10px;
    padding-right: 5px
}
.nav ul li .cart-button:hover {
    background: #7559bf;
    color: #FFF !important;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}
.nav ul li .cart-button:hover span {
    color: #FFF !important
}
.cart-message {
    background: #eee;
    padding: 20px;
    border-radius: 3px
}
.nav ul li.cart:hover .minicart {
    display: block
}
.nav ul li.cart:hover .cart-button {
    background: #7559bf;
    color: #FFF !important;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}
.nav ul li.cart:hover .cart-button span {
    color: #FFF !important
}
.minicart {
    position: absolute;
    display: none;
    width: 470px;
    right: 3px;
    top: 45px;
    background: #7559bf;
    border-radius: 10px;
    border-top-right-radius: 0px
}
ul.minicart__items {
    width: 100% !important;
    padding: 20px;
    padding-bottom: 0px;
    float: none !important;
    box-sizing: border-box;
    display: block !important;
    margin-top: 0px !important;
    margin-bottom: 0px !important
}
.minicart__item {
    margin-bottom: 10px !important;
    line-height: 50px
}
.minicart__item div {
    display: inline-block;
    vertical-align: top
}
.minicart__empty {
    color: #FFF;
    padding: 10px;
    text-align: center;
    margin-bottom: 20px
}
.minicart__preview {
    width: 60px;
    height: 50px;
    display: inline-block;
    margin-right: 10px
}
.minicart__item-label {
    color: #FFF;
    line-height: 50px;
    width: 200px;
    font-size: 14px
}
.minicart__quantity {
    line-height: 50px;
    margin-right: 10px
}
.minicart__quantity-plus,
.minicart__quantity-minus {
    border: 1px solid #FFF;
    color: #FFF;
    background: transparent;
    padding: 0;
    font-size: 14px;
    height: 22px;
    width: 22px;
    border-radius: 11px;
    line-height: 10px;
    text-align: center;
    margin-top: 15px
}
.minicart__quantity-label {
    background: #FFF;
    width: 32px;
    text-align: center;
    margin: 0 5px
}
.minicart__remove {
    line-height: 50px
}
.minicart__remove img {
    display: inline-block;
    line-height: 50px;
    vertical-align: middle;
    cursor: pointer
}
.nav a.minicart__cart {
    text-decoration: underline;
    padding: 10px;
    letter-spacing: normal;
    float: left;
    padding-left: 20px;
    font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif !important
}
.nav a.minicart__cart:hover {
    color: #FFF !important
}
.nav a.minicart__button {
    background: #ff6600;
    letter-spacing: normal;
    display: block;
    color: #FFF;
    float: right;
    font-size: 18px;
    margin-right: 5px;
    text-decoration: none;
    font-weight: bold !important;
    text-decoration: none;
    text-transform: uppercase;
    padding: 10px 20px;
    margin-bottom: 5px;
    border-radius: 5px
}
.nav a.minicart__button:hover {
    background: #e65c00;
    color: #FFF !important
}
.minicart__pricing {
    background: #FFF;
    padding: 10px;
    margin: 5px
}
.minicart__pricing-item {
    font-size: 14px;
    line-height: 200%;
    padding-left: 8px;
    padding-right: 8px
}
.minicart__pricing-item strong {
    font-size: 18px
}
.minicart__pricing-item span {
    float: right
}
.minicart__pricing-label {
    font-size: 11px;
    color: #9b9b9b;
    background: #f4f4f4;
    margin-top: 10px;
    padding: 10px
}
.minicart ul.pagination {
    background: #9c8cd2;
    width: 100% !important;
    text-align: center;
    padding: 10px 0 !important;
    float: none !important;
    box-sizing: border-box;
    display: block !important;
    margin-top: 0px !important
}
.minicart ul.pagination li {
    display: none !important;
    border: 1px solid #7d70a8 !important;
    padding-left: 0px;
    background: #c4bae4;
    vertical-align: top
}
.minicart ul.pagination li a {
    color: #000 !important;
    font-weight: 800 !important;
    padding: 5px 15px !important;
    font-size: 32px;
    line-height: 20px !important;
    padding-bottom: 10px !important
}
.minicart ul.pagination li.disabled {
    background: #9c8cd2
}
.minicart ul.pagination li.disabled a {
    color: #7d70a8
}
.minicart ul.pagination li:first-of-type,
.minicart ul.pagination li:last-of-type {
    display: inline-block !important
}
.minicart ul.pagination li:first-of-type {
    border-right: 0px !important;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px
}
.minicart ul.pagination li:last-of-type {
    border-left: 0px !important;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px
}
.ngTruncateToggleText {
    display: none
}
.purchase-confirmation {
    background: #8acc73;
    padding: 20px;
    margin-top: 10px;
    display: none;
    color: #FFF
}
.purchase-confirmation a {
    color: #FFF;
    text-decoration: underline
}
.purchase-confirmation .icon-check {
    font-size: 36px;
    margin-top: -5px
}
.nav ul.menu ul {
    width: 275px
}
.christmas-banner {
    background-image: url(//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/red_background.png?4565058468623237409);
    background-size: cover;
    text-align: center;
    padding: 20px
}
.christmas-banner h3 {
    color: #FFF;
    max-width: 60%;
    margin: 0px auto;
    font-weight: bold;
    text-transform: none;
    font-size: 1.4em
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner h3 {
        max-width: 90%
    }
}
.christmas-banner h4 {
    color: #FFF;
    margin: 0px auto;
    text-transform: none;
    font-size: 1.2em
}
.christmas-banner p {
    color: #FFF;
    margin: 0px auto;
    text-transform: none;
    font-size: 0.85em
}
.christmas-banner__internal {
    margin: 0 auto
}
.christmas-banner__left {
    width: 20%;
    display: inline-block;
    vertical-align: top
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner__left {
        width: 100%;
        display: block
    }
}
.christmas-banner__left img {
    max-width: 100%;
    height: auto
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner__left img {
        height: 60px
    }
}
.christmas-banner__center {
    max-width: 50%;
    display: inline-block;
    vertical-align: top
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner__center {
        width: 100%;
        max-width: 100%;
        display: block
    }
    .christmas-banner__center br {
        display: none !important
    }
}
.christmas-banner__right {
    width: 20%;
    display: inline-block;
    vertical-align: top
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner__right {
        width: 100%;
        display: block
    }
}
.christmas-banner__right img {
    max-width: 100%;
    height: auto
}
@media (min-width: 0px) and (max-width: 600px) {
    .christmas-banner__right img {
        height: 60px
    }
}
.jotform-form .form-section {
    margin: 0;
    padding: 20px;
    border: 1px solid #e7e7e7;
    border-radius: 6px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1)
}
.jotform-form .form-line,
.jotform-form .form-input-wide {
    list-style: none
}
.jotform-form ul ul,
.jotform-form ul ol,
.jotform-form ol ol,
.jotform-form ol ul {
    margin-left: 0
}
.jotform-form .form-required {
    color: red
}
.jotform-form .form-line {
    margin-bottom: 1em
}
.jotform-form select {
    width: 100% !important
}
.jotform-form input,
.jotform-form select {
    margin-bottom: 0
}
.jotform-form input[type="number"] {
    width: 100% !important
}
.jotform-form .form-input,
.jotform-form .form-input-wide {
    overflow: hidden
}
.jotform-form .form-label {
    line-height: 140%;
    margin-bottom: 0.5em;
    padding-top: 0.5em !important;
    overflow: hidden
}
.jotform-form .showAutoCalendar {
    display: none
}
.jotform-form .form-sub-label {
    font-weight: normal;
    text-transform: none;
    color: #999;
    line-height: 1.6em;
    overflow: hidden;
    clear: both
}
.jotform-form .form-checkbox-item {
    box-sizing: border-box;
    padding: 3px 0
}
.jotform-form .form-checkbox-item label:hover {
    color: #000;
    cursor: pointer
}
.jotform-form .form-radio-item label,
.jotform-form .form-checkbox-item label {
    font-weight: normal;
    text-transform: none
}
.jotform-form .form-radio-item input,
.jotform-form .form-checkbox-item input {
    float: left;
    margin: 0.75em 0.75em 0 0.75em
}
.jotform-form .form-checkbox-item label {
    float: left
}
.jotform-form h3 {
    width: 100%;
    clear: both;
    margin-top: 1em
}
.jotform-form .form-header-group {
    overflow: hidden;
    clear: both
}
.jotform-form .form-header-group .form-header {
    margin-bottom: 0
}
.jotform-quarter .form-multiple-column .form-radio-item,
.jotform-quarter .form-multiple-column .form-checkbox-item {
    width: 25%;
    float: left;
    overflow: hidden
}
.jotform-half .form-multiple-column .form-radio-item,
.jotform-half .form-multiple-column .form-checkbox-item {
    width: 50%;
    float: left;
    overflow: hidden
}
.jotform-full {
    width: 100%;
    float: left;
    overflow: hidden
}
.jotform-name .form-sub-label-container {
    display: inline-block;
    width: 49% !important;
    float: left
}
.jotform-name .form-sub-label-container:first-child {
    margin-right: 1%
}
.jotform-name .form-sub-label-container:last-child {
    margin-left: 1%
}
.jotform-tel .form-sub-label-container:first-child {
    display: inline-block;
    width: 23% !important;
    margin-right: 1%
}
.jotform-tel .form-sub-label-container:last-child {
    display: inline-block;
    width: 74% !important
}
.jotform-tel .phone-separate {
    display: none
}
.jotform-date .form-sub-label-container {
    float: left;
    width: 24%;
    margin-right: 3%
}
.jotform-date input {
    width: 100%;
    float: left
}
.jotform-date .date-separate {
    width: 20%;
    float: left;
    display: none
}
.jotform-date .form-sub-label {
    width: 100%;
    clear: both
}
.quantity-left {
    display: block;
    width: 100%;
    margin-bottom: 1em
}
.purchase {
    overflow: hidden;
    display: block;
    margin-top: 1em
}
.add_to_cart {
    display: block
}
.buy-sample a {
    width: 100%
}
.add_to_cart,
.inline_purchase {
    clear: both;
    display: block;
    text-align: center
}
.purchase {
    overflow: visible
}
.product_form a.button,
.product_form button,
.product_form input[type="submit"],
.product_form input[type="reset"],
.product_form input[type="button"],
.product_form .action_button,
.product_form a.action_button,
.product_form input.action_button[type="submit"],
.product_form input.action_button[type="button"] {
    background: #5a4a91;
    padding: 1.2em;
    border-radius: 6px;
    box-shadow: 0 3px 0 #30284d;
    transition: transform 0.25s, box-shadow 0.25s
}
.product_form a.button:focus,
.product_form a.button:hover,
.product_form button:focus,
.product_form button:hover,
.product_form input[type="submit"]:focus,
.product_form input[type="submit"]:hover,
.product_form input[type="reset"]:focus,
.product_form input[type="reset"]:hover,
.product_form input[type="button"]:focus,
.product_form input[type="button"]:hover,
.product_form .action_button:focus,
.product_form .action_button:hover,
.product_form a.action_button:focus,
.product_form a.action_button:hover,
.product_form input.action_button[type="submit"]:focus,
.product_form input.action_button[type="submit"]:hover,
.product_form input.action_button[type="button"]:focus,
.product_form input.action_button[type="button"]:hover {
    outline: none;
    background: #7260ae
}
.product_form a.button:active,
.product_form button:active,
.product_form input[type="submit"]:active,
.product_form input[type="reset"]:active,
.product_form input[type="button"]:active,
.product_form .action_button:active,
.product_form a.action_button:active,
.product_form input.action_button[type="submit"]:active,
.product_form input.action_button[type="button"]:active {
    background: #504180;
    transform: translateY(2px);
    box-shadow: 0 1px 0 #30284d
}
.product_form .buy-sample {
    background: transparent
}
.product_form .buy-sample a.action_button {
    background: #b168a8;
    box-shadow: 0 3px 0 #763d6f
}
.product_form .buy-sample a.action_button:focus,
.product_form .buy-sample a.action_button:hover {
    background: #984e8f;
    box-shadow: 0 3px 0 #542c4f
}
.product_form .buy-sample a.action_button:active {
    background: #a8579e;
    transform: translateY(2px);
    box-shadow: 0 1px 0 #763d6f
}
.scf-404 h1,
.scf-404 h2,
.scf-404 h3 {
    text-transform: none;
    font-weight: bold
}
.scf-404 h2 {
    font-size: 36px
}
.scf-404 .scf-404-image {
    width: 80%;
    text-align: center;
    margin: auto
}
.scf-404 .scf-404-search {
    background: #5a4a91;
    padding: 5px 20px;
    margin-bottom: 20px
}
.scf-404 .scf-404-search h3 {
    color: #fff
}
.scf-404 .scf-404-search {
    padding-right: 60px
}
.scf-404 .scf-404-colour {
    overflow: hidden;
    padding-left: 20px;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e6e6e6
}
.scf-404 .scf-404-colour .featured_collections {
    overflow: hidden;
    width: 100%
}
body.index .headline {
    margin-bottom: 0.25em
}
body.index .subtitle {
    margin-bottom: 30px
}
body.index .hsContainer a.action_button {
    font-size: 1.2em;
    padding: 1em 2em
}
body.index .slide a.button,
body.index .slide button,
body.index .slide input[type="submit"],
body.index .slide input[type="reset"],
body.index .slide input[type="button"],
body.index .slide .action_button,
body.index .slide a.action_button,
body.index .slide input.action_button[type="submit"],
body.index .slide input.action_button[type="button"] {
    font-size: 1.2em;
    padding: 1em 2em
}
@media (min-width: 0px) and (max-width: 1024px) {
    body.index .slide .hsContent {
        padding: 25px;
        box-sizing: border-box
    }
    body.index .slide .hsContent .headline {
        font-size: 2em
    }
}
.handheld-only {
    display: none
}
@media (min-width: 0px) and (max-width: 1024px) {
    .handheld-only {
        display: block
    }
}
@media (min-width: 0px) and (max-width: 1024px) {
    .hidden-handheld-only {
        display: none
    }
}
@media (min-width: 0px) and (max-width: 1024px) {
    body.search .sidebar.sidebar--search {
        display: none
    }
}
@media (min-width: 0px) and (max-width: 600px) {
    body.search .collection_nav {
        position: relative;
        line-height: 100% !important
    }
    body.search .collection_nav .collection_title {
        display: inline-block;
        padding-top: 0 !important
    }
    body.search .collection_nav .collection_menu {
        display: inline-block;
        position: absolute;
        right: 0;
        top: 5px;
        font-size: .9em
    }
    body.search .collection_nav .collection_menu li {
        top: auto
    }
}
body.collection .collection_description li {
    margin-bottom: 0
}
body.cart h4 {
    font-size: 24px;
    font-weight: bold;
    color: #5a4a91
}
body.cart .cart-product {
    border-bottom: 1px solid #f2f2f2;
    padding-bottom: 10px;
    margin-bottom: 20px
}
body.cart .cart-product p {
    line-height: 1.4em
}
body.cart .cart-product .action_button {
    margin: 0
}
body.cart .cart-product .product-link {
    font-weight: bold
}
body.cart .cart-product .price_total {
    font-weight: bold;
    float: left;
    font-size: 16px !important
}
@media only screen and (max-width: 1023px) {
    body.cart .cart-product .price_total {
        display: block
    }
}
body.cart .cart-product .quantity-amount {
    float: left;
    padding-right: 20px
}
body.cart .cart-product .remove_item {
    float: right
}
body.cart .subtotal-box {
    box-sizing: border-box;
    border-radius: 6px;
    background: #5a4a91;
    color: #fff;
    padding: 20px;
    margin-bottom: 20px
}
body.cart .subtotal-box a {
    color: #fff;
    text-decoration: underline
}
body.cart .subtotal-box .subtotal_amount {
    text-align: center
}
body.cart .subtotal-box .subtotal_amount strong {
    font-size: 36px
}
body.cart .subtotal-box .subtotal-box__fields {
    background: rgba(0, 0, 0, 0.1);
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-left: -20px;
    margin-right: -20px;
    margin-bottom: 20px
}
body.cart .subtotal-box .subtotal-box__fields p {
    background: rgba(0, 0, 0, 0.2);
    padding: 15px;
    font-size: .9em;
    line-height: 1.2em
}
body.cart .subtotal-box .add_to_cart {
    padding: .75em !important;
    font-size: 1.6em !important
}
body.cart .mobile-only {
    display: none
}
@media (min-width: 0px) and (max-width: 1024px) {
    body.cart h1 {
        font-size: 1.6em
    }
    body.cart .cart_items .mobile-hidden {
        display: none !important
    }
    body.cart .cart_items .mobile-only {
        display: block
    }
    body.cart .cart_items {
        background: #f7f7f7;
        border-radius: 6px;
        overflow: hidden;
        border: 1px solid #e6e6e6;
        box-sizing: border-box
    }
    body.cart .cart_items .title {
        display: none
    }
    body.cart .cart_items .cart-product {
        padding: 10px !important;
        margin-bottom: 0 !important;
        border-bottom: 1px solid #e6e6e6 !important
    }
    body.cart .cart_items .cart-product .cart-product__image {
        width: 25%
    }
    body.cart .cart_items .cart-product .cart-product__details {
        width: 45%;
        margin-left: 5%;
        font-size: .9rem
    }
    body.cart .cart_items .cart-product .cart-product__controls {
        width: 25%;
        float: right
    }
    body.cart .cart_items .cart-product .quantity-amount {
        padding: 0 !important;
        float: right !important
    }
    body.cart .cart_items .cart-product .remove_item {
        display: none
    }
    body.cart .subtotal {
        text-align: center;
        margin-top: 1em;
        margin-bottom: 0.5em
    }
}
#slide-1,
#slide-collection {
    position: relative
}
#slide-1:before,
#slide-collection:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0))
}



    </style>
</head>

<body class="index true feature_image">
    
    <div class="mm-page">
        <div id="content_wrapper">
            <div>
                <!-- <div id="header" class="mm-fixed-top">
                    <a href="#nav" class="icon-menu"><span>Menu</span></a>
                    <a href="index.html" title="Foldabox UK and Europe" class="mobile_logo logo"><img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/logo_home.png?12703173436169143084" ></a>
                    <a href="" class="icon-cart right"><span>0</span></a>
                </div> -->
                <!-- <div class="hidden">
                    <div id="nav">
                        <ul>
                            <li class="Selected"><a href="">Home</a></li>
                            <li><a href="">Sizes</a>
                                <ul>
                                    <li><a href="">Small</a></li>
                                    <li><a href="">Small Cube</a></li>
                                    <li><a href="">Large Cube</a></li>
                                    <li><a href="">XL Cube</a></li>
                                    <li><a href="">A6 Shallow</a></li>
                                    <li><a href="">A5 Shallow</a></li>
                                    <li><a href="c">A5 Deep</a></li>
                                    <li><a href="">Medium</a></li>
                                    <li><a href="">Medium Lift Off Lid</a></li>
                                    <li><a href="">A4 Shallow</a></li>
                                    <li><a href="">A4 Deep</a></li>
                                    <li><a href="">A4 Wave</a></li>
                                    <li><a href="">Large</a></li>
                                    <li><a href="">XL Deep</a></li>
                                    <li><a href="">A3 Lift Off Lid</a></li>
                                </ul>
                            </li>
                            <li><a href="">Colours</a>
                                <ul>
                                    <li><a href="">White</a></li>
                                    <li><a href="">Black</a></li>
                                    <li><a href="">Ivory</a></li>
                                    <li><a href="">Natural Kraft</a></li>
                                    <li><a href="">Pale Pink</a></li>
                                    <li><a href="">Pale Blue</a></li>
                                    <li><a href="">Silver</a></li>
                                    <li><a href="">Red</a></li>
                                    <li><a href="">Gold</a></li>
                                    <li><a href="">Cerise</a></li>
                                    <li><a href="">Orange</a></li>
                                </ul>
                            </li>
                            <li><a href="">Extras </a>
                                <ul>
                                    <li><a href="">Mailing Cartons</a></li>
                                    <li><a href="">Cupcake Dividers</a></li>
                                    <li><a href="">Ribbons for Slot Boxes</a></li>
                                    <li><a href="">Swatch Card</a></li>
                                    <li><a href="">Tissue & Shred</a></li>
                                </ul>
                            </li>
                            <li><a href="">Samples</a>
                                <ul>
                                    <li><a href="">Small Samples</a></li>
                                    <li><a href="">Small Cube Samples</a></li>
                                    <li><a href="">Large Cube Samples</a></li>
                                    <li><a href="">XL Cube Samples</a></li>
                                    <li><a href="">A6 Shallow Samples</a></li>
                                    <li><a href="">A5 Shallow Samples</a></li>
                                    <li><a href="">A5 Deep Samples</a></li>
                                    <li><a href="">Medium Samples</a></li>
                                    <li><a href="">Medium Lift Off Lid Samples</a></li>
                                    <li><a href="">A4 Shallow Samples</a></li>
                                    <li><a href="">A4 Deep Samples</a></li>
                                    <li><a href="">A4 Wave Samples</a></li>
                                    <li><a href="">Large Samples</a></li>
                                    <li><a href="">XL Deep Samples</a></li>
                                    <li><a href="">A3 Lift Off Lid Samples</a></li>
                                    <li><a href="">Ribbon Samples</a></li>
                                    <li><a href="">Mailing Carton Samples</a></li>
                                </ul>
                            </li>
                            <li><a href="">Printing</a></li>
                            <li><a href="">Bespoke</a></li>
                            <li>
                                <a href="" id="customer_login_link">Sign in</a>
                            </li>
                        </ul>
                    </div>
                    <form action="" method="post" id="cart">
                        <ul>
                            <li class="mm-subtitle"><a class="continue ss-icon" href="">&#x2421;</a></li>
                            <li class="empty_cart">Your Cart is Empty</li>
                        </ul>
                    </form>
                </div> -->
                <!-- <div class="header mm-fixed-top   header_bar">
                    <div class="container">
                        <div class="three columns logo">
                            <a href="index.html" title="Foldabox UK and Europe"><img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/logo_home.png?12703173436169143084" alt="Foldabox UK and Europe"></a>
                        </div>
                        <div class="thirteen columns nav mobile_hidden">
                            <ul class="menu right">
                                <li>
                                    <a href="" title="My Account ">Sign in</a>
                                </li>
                                <li class="search">
                                    <a href="" title="Product Search" class="icon-search" id="search-toggle"></a>
                                </li>
                                <li class="cart">
                                    <a href="" class="icon-cart cart-button"><span class="cart-button-text">0</span></a>
                                    <div class="minicart" ng-app="myApp" id="minicart">
                                        <div class="minicart__empty">
                                            You have nothing in your cart.
                                        </div>
                                        <a class="minicart__button" href="cart.html">Proceed to cart</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu align_right">
                                <li><a href="" class="top-link active">Home</a></li>
                                <li><a href="" class="sub-menu  ">Sizes&nbsp;<span class="icon-down-arrow"></span></a>
                                    <div class="dropdown animated fadeIn ">
                                        <div class="dropdown_links clearfix">
                                            <ul>
                                                <li><a href="">Small</a></li>
                                                <li><a href="">Small Cube</a></li>
                                                <li><a href="">Large Cube</a></li>
                                                <li><a href="">XL Cube</a></li>
                                                <li><a href="">A6 Shallow</a></li>
                                                <li><a href="">A5 Shallow</a></li>
                                                <li><a href="">A5 Deep</a></li>
                                                <li><a href="">Medium</a></li>
                                                <li><a href="">Medium Lift Off Lid</a></li>
                                                <li><a href="">A4 Shallow</a></li>
                                                <li><a href="">A4 Deep</a></li>
                                                <li><a href="">A4 Wave</a></li>
                                                <li><a href="">Large</a></li>
                                                <li><a href="">XL Deep</a></li>
                                                <li><a href="">A3 Lift Off Lid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="" class="sub-menu  ">Colours&nbsp;<span class="icon-down-arrow"></span></a>
                                    <div class="dropdown animated fadeIn ">
                                        <div class="dropdown_links clearfix">
                                            <ul>
                                                <li><a href="">White</a></li>
                                                <li><a href="">Black</a></li>
                                                <li><a href="">Ivory</a></li>
                                                <li><a href="">Natural Kraft</a></li>
                                                <li><a href="">Pale Pink</a></li>
                                                <li><a href="">Pale Blue</a></li>
                                                <li><a href="">Silver</a></li>
                                                <li><a href="">Red</a></li>
                                                <li><a href="">Gold</a></li>
                                                <li><a href="">Cerise</a></li>
                                                <li><a href="">Orange</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="" class="sub-menu  ">Extras&nbsp;<span class="icon-down-arrow"></span></a>
                                    <div class="dropdown animated fadeIn ">
                                        <div class="dropdown_links clearfix">
                                            <ul>
                                                <li><a href="">Mailing Cartons</a></li>
                                                <li><a href="">Cupcake Dividers</a></li>
                                                <li><a href="">Ribbons for Slot Boxes</a></li>
                                                <li><a href="">Swatch Card</a></li>
                                                <li><a href="">Tissue & Shred</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="" class="sub-menu  ">Samples&nbsp;<span class="icon-down-arrow"></span></a>
                                    <div class="dropdown animated fadeIn ">
                                        <div class="dropdown_links clearfix">
                                            <ul>
                                                <li><a href="">Small Samples</a></li>
                                                <li><a href="">Small Cube Samples</a></li>
                                                <li><a href="">Large Cube Samples</a></li>
                                                <li><a href="">XL Cube Samples</a></li>
                                                <li><a href="">A6 Shallow Samples</a></li>
                                                <li><a href="">A5 Shallow Samples</a></li>
                                                <li><a href="">A5 Deep Samples</a></li>
                                                <li><a href="">Medium Samples</a></li>
                                                <li><a href="">Medium Lift Off Lid Samples</a></li>
                                                <li><a href="">A4 Shallow Samples</a></li>
                                                <li><a href="">A4 Deep Samples</a></li>
                                                <li><a href="">A4 Wave Samples</a></li>
                                                <li><a href="">Large Samples</a></li>
                                                <li><a href="">XL Deep Samples</a></li>
                                                <li><a href="">A3 Lift Off Lid Samples</a></li>
                                                <li><a href="">Ribbon Samples</a></li>
                                                <li><a href="">Mailing Carton Samples</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="" class="top-link ">Printing</a></li>
                                <li><a href="" class="top-link ">Bespoke</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="container main content">
                    <div class="sixteen columns">
                        <div class="clearfix breadcrumb">
                            <!-- <div class="nav_arrows">
                                <a href="" title="Next" class="ss-icon next">▻</a>
                            </div> -->
                            <div class="handheld-product-title handheld-only">
                                <h1 class="product_name" itemprop="name">Ivory Small Gift Boxes no ribbon</h1>
                            </div>
                        </div>
                    </div>
                    <div class="sixteen columns">
                        <div class="product-1587186689">
                            <div class="section product_section clearfix" itemscope="" itemtype="http://schema.org/Product">
                                <div class="nine columns alpha ">
                                    <div class="flexslider product_gallery product-1587186689-gallery product_slider ">
                                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                            <ul class="slides" style="width: 1400%; transition-duration: 0.6s; transform: translate3d(-2620px, 0px, 0px);">
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-title="Foldabox UK White Folding Gift Box with Custom Debossed Logo " class="clone" aria-hidden="true" style="width: 655px; float: left; display: block;">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK White Folding Gift Box with Custom Debossed Logo ">
                                                        <img src="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_2048x2048.jpg?v=1486920920" alt="Foldabox UK White Folding Gift Box with Custom Debossed Logo " data-index="4" data-image-id="21419224589" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box.jpg?v=1486920920', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                                    </a>
                                    
                                                </li>
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-title="Foldabox UK White Large 5&quot; Cube Folding Gift Box" style="width: 655px; float: left; display: block;" class="">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK White Large 5&quot; Cube Folding Gift Box">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_2048x2048.jpg?v=1486920747" alt="Foldabox UK White Large 5&quot; Cube Folding Gift Box" data-index="0" data-image-id="3707656257" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625.jpg?v=1486920747', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom featured_image" draggable="false">
                                </a>
                                                    
                                                </li>
                                                <!-- <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745_1024x1024.jpeg?v=1486920747" data-title="Foldabox UK Large Cube Gift Box Assembled Size Line Drawing " style="width: 655px; float: left; display: block;" class="">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK Large Cube Gift Box Assembled Size Line Drawing ">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745_1024x1024.jpeg?v=1486920747" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745_1024x1024.jpeg?v=1486920747" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745_2048x2048.jpeg?v=1486920747" alt="Foldabox UK Large Cube Gift Box Assembled Size Line Drawing " data-index="1" data-image-id="3707086337" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745.jpeg?v=1486920747', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                </a>
                                                    
                                                </li> -->
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge_1024x1024.jpg?v=1486920747" data-title="Foldabox UK White Large Cube Gift Box front flap closure detail" style="width: 655px; float: left; display: block;" class="">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK White Large Cube Gift Box front flap closure detail">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge_1024x1024.jpg?v=1486920747" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge_1024x1024.jpg?v=1486920747" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge_2048x2048.jpg?v=1486920747" alt="Foldabox UK White Large Cube Gift Box front flap closure detail" data-index="2" data-image-id="4345700097" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge.jpg?v=1486920747', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                </a>
            
                                                </li>
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a_1024x1024.jpg?v=1486920854" data-title="Foldabox UK Custom Silver Foil Logo onto White Folding Gift Box" style="width: 655px; float: left; display: block;" class="flex-active-slide">
                                                    <a href="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a.jpg?v=1486920854" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK Custom Silver Foil Logo onto White Folding Gift Box">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a_1024x1024.jpg?v=1486920854" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a_1024x1024.jpg?v=1486920854" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a_2048x2048.jpg?v=1486920854" alt="Foldabox UK Custom Silver Foil Logo onto White Folding Gift Box" data-index="3" data-image-id="21419223053" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a.jpg?v=1486920854', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                </a>
                                                    
                                                </li>
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-title="Foldabox UK White Folding Gift Box with Custom Debossed Logo " style="width: 655px; float: left; display: block;" class="">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK White Folding Gift Box with Custom Debossed Logo ">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_2048x2048.jpg?v=1486920920" alt="Foldabox UK White Folding Gift Box with Custom Debossed Logo " data-index="4" data-image-id="21419224589" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box.jpg?v=1486920920', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                </a>
                                                    
                                                </li>
                                                <li data-thumb="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-title="Foldabox UK White Large 5&quot; Cube Folding Gift Box" style="width: 655px; float: left; display: block;" class="clone" aria-hidden="true">
                                                    <a href="" class="fancybox" data-fancybox-group="1587186689" title="Foldabox UK White Large 5&quot; Cube Folding Gift Box">
                                  <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_2048x2048.jpg?v=1486920747" alt="Foldabox UK White Large 5&quot; Cube Folding Gift Box" data-index="0" data-image-id="3707656257" data-cloudzoom="" draggable="false">
                                </a>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--  // bỏ phần này
                                        <ol class="flex-control-nav flex-control-thumbs">
                                            <li>
                                                <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_7116896a-58f9-4829-9ff2-171a3fccf625_1024x1024.jpg?v=1486920747" class="" draggable="false">
                                            </li>
                                            <li>
                                                <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03_Large_cube_with_sizes_cmprsd_4bdd2406-c272-4763-b2e2-a83939f8e745_1024x1024.jpeg?v=1486920747" draggable="false" class="">
                                            </li>
                                            <li>
                                                <img src="//cdn.shopify.com/s/files/1/0063/5942/products/03040_flap_edge_1024x1024.jpg?v=1486920747" draggable="false" class="">
                                            </li>
                                            <li>
                                                <img src="//cdn.shopify.com/s/files/1/0063/5942/products/EG_Silver_on_White_d7e94453-0c0b-4f84-aaf1-a6244ecb6e5a_1024x1024.jpg?v=1486920854" draggable="false" class="">
                                            </li>
                                            <li>
                                                <img src="//cdn.shopify.com/s/files/1/0063/5942/products/Debossed_logo_onto_white_box_1024x1024.jpg?v=1486920920" draggable="false" class="">
                                            </li>
                                        </ol>
                                        // bỏ phần này -->
                                        <!--   <ul class="flex-direction-nav">
                                            <li class="flex-nav-prev"><a class="flex-prev ss-icon" href="#">◅</a></li>
                                            <li class="flex-nav-next ss-icon"><a class="flex-next" href="#">▻</a></li>
                                        </ul> -->
                                    </div>
                                    &nbsp;
                                </div>
                                <div class="seven columns omega">
                                    <h1 class="product_name hidden-handheld-only" itemprop="name">White Large Cube Gift Boxes no ribbon</h1>
                                    <p class="sku">
                                        Product Code: <span itemprop="sku">03040</span>
                                    </p>
                                    <p class="modal_price" itemprop="offers" itemscope="" itemtype="">
                                        <meta itemprop="priceCurrency" content="GBP">
                                        <meta itemprop="seller" content="Foldabox UK and Europe">
                                        <link itemprop="availability" href="">
                                        <meta itemprop="itemCondition" content="New">
                                        <span class="sold_out"></span>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-label">Price (Carton of 12):</span>
                                        <span itemprop="price" content="28.80" class="">
                    <span class="current_price">
                        
                            £28.80
                        
                    </span>
                                        </span>
                                        <span class="price-label">Excluding VAT</span>
                                        <div>
                                            <span class="price-label">Unit price Excl. VAT:</span> £2.40
                                        </div>
                                        <div>
                                            <span class="price-label">Unit price Incl. VAT:</span> £2.88
                                        </div>
                                    </div>
                                    <p></p>
                                    <form action="" method="post" class="clearfix product_form" id="product-form-1587186689">
                                        <input type="hidden" name="id" value="4839741313">
                                        <div class="left quantity-left">
                                            <label for="quantity">Qty</label>
                                            <input type="number" min="1" size="2" class="quantity" name="quantity" id="quantity" value="1" max="80"> Carton
                                            <span class="quantity-s"></span> of 12
                                        </div>
                                        <div class="purchase clearfix inline_purchase">
                                            <button type="submit" name="add" class="action_button add_to_cart" data-label="Add to Cart"><span class="text">Add to Cart</span></button>
                                        </div>
                                        <div class="purchase clearfix inline_purchase">
                                            <div class="buy-sample">
                                                <a href=""><span class="text">Buy sample</span></a>
                                            </div>
                                        </div>
                                        <div class="purchase-confirmation">
                                            <span class="icon-check"></span> Added to cart! <a href="">View cart</a> or <a href="">checkout now</a>!
                                        </div>
                                    </form>
                                    <!-- <div class="description" itemprop="description">
                                        <p>White&nbsp;Large 5" Cube gift boxes without ribbon are perfect for individual cupcakes, muffins, mugs and artisan ceramics, decorative glass baubles, mini beauty products or wedding and baby shower favours. They also make ideal luxury candle packaging.</p>
                                        <ul>
                                            <li>Contemporary white matt laminated finish throughout.</li>
                                            <li>Sideways flat folding construction that assembles instantly to a high quality rigid gift box with sticky patches on the base to secure the box assembled.</li>
                                            <li>Concealed magnetic snap shut front flap closure.</li>
                                            <li>No ribbon for a classic streamline appearance.</li>
                                            <li>Box lid can be printed, foil blocked or debossed with your own logo.</li>
                                            <li>See tabs below for printing, product and delivery information.</li>
                                        </ul>
                                        <p>If you have any queries please contact us:&nbsp;<a href="">Fiona@foldabox.co.uk</a></p>
                                    </div> -->
                                    <div class="meta">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="more-details clearfix">
                        <!-- <div class="more-details__header">
                            <div class="container">
                                <div class="sixteen columns">
                                    <ul class="nav nav-tabs">
                                        <li class="spt-tab-title active"><a data-toggle="tab" href="#menu1">Printing</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu2">Mailing Carton</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu3">Delivery Information</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu4">Discounts</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu5">Samples</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu6">Product Specifications</a></li>
                                        <li class="spt-tab-title"><a data-toggle="tab" href="#menu7">Packing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="more-details__container">
                            <div class="container">
                                <div class="sixteen columns">
                                    <div class="tab-content">
                                        <!-- <div id="menu1" class="tab-pane fade more-details__description in active">
                                            <p><span style="font-size:14px">If you'd like to add your own logo to our stock gift boxes, it's easy and the results can look stunning!</span></p>
                                            <p><span style="font-size:14px">Visit our <a href="">Printing Page </a>and complete the Jotform to assist us in quoting you quickly and accurately.</span></p>
                                            <p><span style="font-size:14px">Adding a logo enables you to personalise stock gift&nbsp;boxes without the large volume commitment and long lead time needed for a fully made to order box.</span></p>
                                            <p><span style="font-size:14px">24 boxes is the minimum and 144 boxes or more (boxes are all packed in 12's) is the most economic quantity due to fixed origination costs that apply, no matter how few or how many boxes are printed.</span></p>
                                            <p><span style="font-size:14px">Printing is offered on all boxes&nbsp;available from stock. These boxes are already manufactured so printing options are limited to the outside and inside lid of the box. We cannot print all over the box, this would require the flat paper to be printed before it is affixed to the box and assembled.&nbsp;</span></p>
                                            <p><span style="font-size:14px">We can use foil, print ink to match a Pantone colour, or deboss your logo. Multiple print colours and CMYK print are also possible depending on registration, design complexity and box colour.&nbsp;We&nbsp;can’t bleed print off the edges of the box, we need a min. 1cm border from the outer edge of the print to the edges of the box lid.</span></p>
                                            <p><span style="font-size:14px">Allow around 2 weeks for custom printing from receipt of useable artwork and payment to delivery of printed boxes. Sooner delivery may be possible but during busy times, especially September - December it can be longer.&nbsp;</span></p>
                                            <p><span style="font-size:14px">Due to the high volume of print enquiries, please allow up to 3 days for a custom print quotation.&nbsp;</span></p>
                                        </div> -->
                                        <div id="menu2" class="tab-pane fade more-details__description">
                                            <p><span style="font-size:14px">If you need a good quality protective mailing carton to send our gift box with your own product contents packed inside we can help with a mailing carton to fit our assembled gift box.</span></p>
                                            <p><span style="font-size:14px">See our small cube&nbsp;mailing carton product page&nbsp;for full details: <a href="">Small Cube Mailing Carton</a></span></p>
                                        </div>
                                        <div id="menu3" class="tab-pane fade more-details__description">
                                            <ul>
                                                <li><span style="font-size:14px">Dispatch is made the same day as you order, if we receive your order on-line via our website before 1.30pm Monday – Friday.</span></li>
                                                <li><span style="font-size:14px">Orders received after 1.30pm, during a weekend or national holiday will be dispatched the next&nbsp;working day.</span></li>
                                                <li><span style="font-size:14px">Delivery costs are weight based. Once you have added all the items to your basket you can proceed to checkout and confirm the courier cost calculated on your total basket weight before progressing&nbsp;to payment.&nbsp;</span></li>
                                                <li><span style="font-size:14px">Delivery is made via courier on a next working day service but this is not guaranteed. 98% of deliveries are made the following day but more remote locations, or during busy times, delivery can take 2 days.</span></li>
                                                <li><span style="font-size:14px">We offer&nbsp;the option&nbsp;for guaranteed and timed delivery but please ensure your order is placed before 1.30pm cut-off in order for this timing to be effective for delivery the next day.</span></li>
                                                <li><span style="font-size:14px">Contact us if you have an urgent requirement so we can be sure to manage your expectations as best we can.</span></li>
                                                <li><span style="font-size:14px">Delivery is via a signed-for courier service. Please ensure someone is available at the delivery address you provide or delivery could be delayed, especially residential home deliveries.</span></li>
                                                <li><span style="font-size:14px">Please only sign for the number of packages you physically receive. Your consignment may be made up of multiple packages.</span></li>
                                                <li><span style="font-size:14px">Do not sign for, or take delivery of evidently damaged packages.</span></li>
                                                <li><span style="font-size:14px">Please contact&nbsp;us by completing&nbsp;the JotForm on our <a href="">Delivery Information Page</a> if you have any queries regarding your delivery.&nbsp;</span></li>
                                            </ul>
                                        </div>
                                        <div id="menu4" class="tab-pane fade more-details__description">
                                            <ul>
                                                <li><span style="font-size:14px">Prices on our website are wholesale trade prices.</span></li>
                                                <li><span style="font-size:14px">We offer discounts based on the total net value spend of your order, excluding carriage and VAT.</span></li>
                                                <li><span style="font-size:14px">If you spend £400.00 or more enter the discount code <strong>bigorderdiscount</strong> at checkout and 5% will be deducted automatically from your box order value.</span></li>
                                                <li><span style="font-size:14px">If you spend £650.00 or more, enter the discount code <strong>reallybigorderdiscount</strong> at checkout and 10% will be deducted automatically from your box order value.</span></li>
                                                <li><span style="font-size:14px">We offer an automatic 10% discount to charities and hospitals irrespective of order value. Please contact us by e-mail so we can give you a unique discount code to use at checkout. <a href="">fiona@foldabox.co.uk</a></span></li>
                                                <li><span style="font-size:14px">These discounts apply to plain stock boxes ordered via the website.</span></li>
                                                <li><span style="font-size:14px">Order value discounts cannot be used in conjunction with any other special price offers or promotions.</span></li>
                                                <li><span style="font-size:14px">​Discounts cannot be issued retrospectively.&nbsp;</span></li>
                                            </ul>
                                        </div>
                                        <div id="menu5" class="tab-pane fade more-details__description">
                                            <ul>
                                                <li><span style="font-size:14px">Sorry, we cannot send samples free of charge due to the very high number of daily requests.</span></li>
                                                <li><span style="font-size:14px">You can buy individual or multiple samples of any gift box.</span></li>
                                                <li><span style="font-size:14px">Samples are identical to bulk stock.</span></li>
                                                <li><span style="font-size:14px">We recommend you buy a sample before buying bulk to ensure the box colour, size and quality meet your requirements.</span></li>
                                                <li><span style="font-size:14px">Click the ‘<strong>Buy Sample’</strong>&nbsp;button situated&nbsp;under&nbsp;the ‘Add to Cart’ button on any individual Product Page, or navigate from the top menu under ‘Samples’ listed by sample box size.</span></li>
                                                <li><span style="font-size:14px">The individual sample charge includes the box, picking, packing and courier cost.</span></li>
                                                <li><span style="font-size:14px">If you require larger numbers of samples (three or more) of the same or different gift box samples contact us for a discount code to reduce the combined package courier cost -<a href="">multisamples@foldabox.co.uk</a></span></li>
                                                <li><span style="font-size:14px">If you return to order a minimum of 24 boxes (2 cartons) of the same box as the sample, we can credit you the&nbsp;bulk unit price of the gift box&nbsp;(excluding courier cost &amp; VAT). This excludes custom printed box orders.</span></li>
                                                <li><span style="font-size:14px">Contact us for a discount code to use at checkout&nbsp;before&nbsp;you place your bulk order -&nbsp;<a href="">samplediscount@foldabox.co.uk</a></span></li>
                                                <li><span style="font-size:14px">Sample credits cannot be issued retrospectively and can only be used once.</span></li>
                                            </ul>
                                        </div>
                                        <div id="menu6" class="tab-pane fade more-details__description">
                                            <ul>
                                                <li><span style="font-size:14px">1000g greyboard (approx. 2.3mm thickness)</span></li>
                                                <li><span style="font-size:14px">Covered fully inside and outside with 157gsm white art paper with matte lamination.</span></li>
                                                <li><span style="font-size:14px">5cm depth front flap with 2 x concealed magnetic closures.</span></li>
                                                <li><span style="font-size:14px">Sideways folding with triangle sticky patches to fix the bsse.</span></li>
                                                <li><span style="font-size:14px">No ribbon.</span></li>
                                            </ul>
                                        </div>
                                        <div id="menu7" class="tab-pane fade more-details__description">
                                            <ul>
                                                <li><span style="font-size:14px">Flat packed in an individual clear cellobag with airholes.</span></li>
                                                <li><span style="font-size:14px">Tape seal adhesive strip on cellobag is not sealed so you can re-use.</span></li>
                                                <li><span style="font-size:14px">Flat Size: 34.7cm x 19.3cm x 0.5cm (L Shaped)</span></li>
                                                <li><span style="font-size:14px">Individual Box Weight: 118 grams</span></li>
                                                <li><span style="font-size:14px">12pcs per double-walled inner carton.</span></li>
                                                <li><span style="font-size:14px">Inner Carton Size: 37.5cm x 24cm x 13cm</span></li>
                                                <li><span style="font-size:14px">Inner Carton Weight: 1.75 kgs</span></li>
                                                <li><span style="font-size:14px">96pcs (8 inners) per double-walled outer carton - if applicable to your order quantity.</span></li>
                                                <li><span style="font-size:14px">Outer Carton Size:&nbsp; 48cm x 40cm x 48cm</span></li>
                                                <li><span style="font-size:14px">Outer Carton Weight: 14 kgs</span></li>
                                                <li><span style="font-size:14px">Pallet Quantity: 1,728pcs</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sixteen columns">
                            <br class="clear">
                            <h4 class="title center related-title">Related Items</h4>
                            <div class="feature_divider"></div>
                            <div itemtype="">
                                <div class="four columns alpha thumbnail even" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
                                    <a href="" itemprop="url">
                                        <div class="relative product_image">
                                            <img src="//cdn.shopify.com/s/files/1/0063/5942/products/01040_grande.jpg?v=1489098506" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/01040_grande.jpg?v=1489098506" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/01040_1024x1024.jpg?v=1489098506" alt="Foldabox UK Small White Gift Boxes available from stock" style="opacity: 1;">
                                        </div>
                                        <div class="info">
                                            <span class="title" itemprop="name">White Small Gift Boxes no ribbon</span>
                                            <span class="price " itemprop="offers" itemscope="" itemtype="">
                          <span itemprop="price">£18.60 per 12</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="four columns  thumbnail odd" itemprop="itemListElement" itemscope="" itemtype="">
                                    <a href="" itemprop="url">
                                        <div class="relative product_image">
                                            <img src="//cdn.shopify.com/s/files/1/0063/5942/products/01042_grande.jpg?v=1486936378" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/01042_grande.jpg?v=1486936378" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/01042_1024x1024.jpg?v=1486936378" alt="Foldabox UK Small white gift boxes with fixed ribbon" style="opacity: 1;">
                                        </div>
                                        <div class="info">
                                            <span class="title" itemprop="name">White Small Gift Boxes with fixed grosgrain ribbon</span>
                                            <span class="price " itemprop="offers" itemscope="" itemtype="">
                          <span itemprop="price">£19.20 per 12</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="four columns  thumbnail even" itemprop="itemListElement" itemscope="" itemtype="">
                                    <a href="" itemprop="url">
                                        <div class="relative product_image">
                                            <img src="//cdn.shopify.com/s/files/1/0063/5942/products/02040_0cdf1406-0cef-443c-9ea7-ceb4af0f7cce_grande.jpg?v=1486931378" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/02040_0cdf1406-0cef-443c-9ea7-ceb4af0f7cce_grande.jpg?v=1486931378" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/02040_0cdf1406-0cef-443c-9ea7-ceb4af0f7cce_1024x1024.jpg?v=1486931378" alt="Foldabox UK White Small Cube Gift Box without ribbon available from stock" style="opacity: 1;">
                                        </div>
                                        <div class="info">
                                            <span class="title" itemprop="name">White Small Cube Gift Boxes no ribbon</span>
                                            <span class="price " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                          <span itemprop="price">£24.00 per 12</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="four columns omega thumbnail odd" itemprop="itemListElement" itemscope="" itemtype="">
                                    <a href="" itemprop="url">
                                        <div class="relative product_image">
                                            <img src="//cdn.shopify.com/s/files/1/0063/5942/products/Small_White_Cube_Slot_Version_grande.jpg?v=1486932328" data-src="//cdn.shopify.com/s/files/1/0063/5942/products/Small_White_Cube_Slot_Version_grande.jpg?v=1486932328" data-src-retina="//cdn.shopify.com/s/files/1/0063/5942/products/Small_White_Cube_Slot_Version_1024x1024.jpg?v=1486932328" alt="Foldabox Small White Cube Gift Box with Changeable Ribbon" style="opacity: 1;">
                                        </div>
                                        <div class="info">
                                            <span class="title" itemprop="name">White Small Cube Gift Boxes with changeable ribbon</span>
                                            <span class="price " itemprop="offers" itemscope="" itemtype="">
                          <span itemprop="price">£25.20 per 12</span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <br class="clear product_clear">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="footer">
                        <div class="container">
                            <div class="four columns">
                                <h6>Useful Links</h6>
                                <ul class="footer_menu">
                                    <li><a href="" title="Blog">Blog</a></li>
                                    <li><a href="" title="Contact Us">Contact Us</a></li>
                                    <li><a href="" title="FAQs">FAQs</a></li>
                                    <li><a href="" title="Delivery Information">Delivery Information</a></li>
                                    <li><a href="" title="Meet The Team">Meet The Team</a></li>
                                    <li><a href="" title="Privacy">Privacy</a></li>
                                    <li><a href="" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                            <div class="four columns">
                                <h6>Extras</h6>
                                <ul class="footer_menu">
                                    <li><a href="" title="Mailing Cartons">Mailing Cartons</a></li>
                                    <li><a href="" title="Cupcake Dividers">Cupcake Dividers</a></li>
                                    <li><a href="" title="Ribbons for Slot Boxes">Ribbons for Slot Boxes</a></li>
                                    <li><a href="" title="Swatch Card">Swatch Card</a></li>
                                    <li><a href="" title="Tissue &amp; Shred">Tissue &amp; Shred</a></li>
                                </ul>
                            </div>
                            <div class="four columns">
                                <h6>Contact us</h6>
                                <p class="address">
                                    <strong>FoldaBox Limited</strong>
                                    <br> Poste Restante
                                    <br> Unit 33 Watson Road
                                    <br> Wilstead Industrial Park
                                    <br> Wilstead
                                    <br> Bedford MK45 3PD
                                    <br> United Kingdom
                                    <br>
                                </p>
                                <p>
                                    <a href="" title="Email Foldabox UK and Europe" target="_blank">
                            Email
                        </a>
                                </p>
                            </div>
                            <div class="four columns">
                                <h6>Follow</h6>
                                <a href="" title="Foldabox UK and Europe on Facebook" class="ss-icon" rel="me" target="_blank">
                      
                    </a>
                                <a href="" title="Foldabox UK and Europe on Google+" class="ss-icon" rel="publisher" target="_blank">
                      
                    </a>
                                <a href="" title="Foldabox UK and Europe on Pinterest" class="ss-icon" rel="me" target="_blank">
                      
                    </a>
                                <a href="" title="Email Foldabox UK and Europe" class="ss-icon" target="_blank">
                      ✉
                    </a>
                                <p>Sign up to get the latest on sales, new releases and more …</p>
                                <div class="newsletter ">
                                    <p class="message"></p>
                                    <form method="post" action="/contact#contact_form" id="contact_form" class="contact-form" accept-charset="UTF-8">
                                        <input type="hidden" value="customer" name="form_type">
                                        <input type="hidden" name="utf8" value="✓">
                                        <input type="hidden" name="contact[tags]" value="prospect,newsletter">
                                        <input type="hidden" name="contact[first_name]" value="Newsletter">
                                        <input type="hidden" name="contact[last_name]" value="Subscriber">
                                        <input type="email" class="contact_email" name="contact[email]" required="" pattern="[^ @]*@[^ @]*" placeholder="Enter your email address...">
                                        <input type="submit" class="action_button sign_up" value="Sign Up">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="footer__bottom">
                                <p class="mobile_only">
                                </p>
                                <p class="credits">
                                    © 2017 <a href="" title="">Foldabox UK and Europe</a>.
                                    <br> Designed by <a href="" target="_blank" title="The Shopify Shopfitter. We build beautiful online stores using Shopify. Would you like to be next?">ShopCreatify</a>.
                                    <a href="">Ecommerce Software by Shopify</a>
                                </p>
                                <div class="payment_methods ">
                                    <img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/cc-paypal-light.png?12703173436169143084" alt="PayPal">
                                    <img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/cc-visa-light.png?12703173436169143084" alt="Visa">
                                    <img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/cc-mastercard-light.png?12703173436169143084" alt="Mastercard">
                                    <img src="//cdn.shopify.com/s/files/1/0063/5942/t/31/assets/cc-amex-light.png?12703173436169143084" alt="American Express">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <x-footer/> -->
</body>
<script>
    (function($) {

    var allPanels = $('.accordion > dd').hide();

    $('.accordion > dt > h4').click(function() {
        $this = $(this);
        $target = $this.parent().next();
        if (!$target.hasClass('active')) {
            $('h4').find('i').removeClass('fa-minus');
            $('h4').find('i').addClass('fa-plus');
            $this.find('i').removeClass('fa-plus');
            $this.find('i').addClass('fa-minus');

            allPanels.removeClass('active').slideUp();
            $target.addClass('active').slideDown();
        } else {
            allPanels.removeClass('active').slideUp();
            $('h4').find('i').removeClass('fa-minus');
            $('h4').find('i').addClass('fa-plus');
        }
        return false;
    });

    var updateCartCount = function(number) {
        console.log('hi');
        jQuery('.cart-button-text').html(number);
    };

    $(document).ready(function() {
        $(".fancybox").fancybox();

        $('.read-more').on('click', function(event) {
            event.preventDefault();
            $('.description--read-more').toggleClass('active');
            if ($(this).text() == 'Read more') {
                $(this).text('Read less');
            } else {
                $(this).text('Read more');
            }
        });
    });



    // Update the quantity to add correct plurals
    $('#quantity').on('blur', function() {
        console.log($(this).val());
        if ($(this).val() >= 2 && $('.quantity-s').length) {
            $('.quantity-s').text('s');
        } else {
            $('.quantity-s').text('');
        }
    });

})(jQuery);

$(function() {

    var allPanels = $('.accordion > dd').hide();

    $('.accordion > dt > a').click(function() {
        if (!$(this).parent().next().is(":visible")) {
            $(this).find('small.right').html('&#9660;');
            $(this).parent().next().slideDown();
        } else if ($(this).parent().next().is(":visible")) {
            $(this).parent().next().slideUp();
            $(this).parent().next('.accordion small.right').html('&#9668;');
            $(this).next('small.right').html('&#9668;');
            if ($(this).find('small.right').html('&#9660;')) {
                $(this).find('small.right').html('&#9668;');
            } else if ($(this).find('small.right').html('&#9668;')) {
                $(this).find('small.right').html('&#9660;');
            }
        }
        return false;
    });

    var $header = $(".feature_image .header");

    $(".product_slider img").unveil(200);
    $(".thumbnail img, .cart_page_image img").unveil(200, function() {
        $(this).load(function() {
            this.style.opacity = 1;
        });
    });



    if ($(window).width() >= 768) {
        $(document).ready(function() {

            if ($header.length && !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var s = skrollr.init({
                    forceHeight: false
                });
                $(".featured_products").next(".slide").waypoint(function() {
                    window.dispatchEvent(new Event('resize'));
                });
            }

            setTimeout(function() {
                s.refresh();
                console.log('refreshed');
            }, 4000);


        });

        $("#featured_links").waypoint(function() {
            $(this).find(".column, .columns").addClass("animated fadeInUp");
        }, {
            offset: '80%'
        });


        $("#pagecontent").waypoint(function(direction) {
            $header.toggleClass('is-absolute');
            $header.removeClass('fadeIn');
            $header.addClass('delay-0s');

            $header.toggleClass('header_bar');
            if ($header.hasClass('header_bar')) {
                $('.dropdown').css({
                    "top": $('.header').height()
                });
            } else {
                $('.dropdown').css({
                    "top": "auto"
                });
            }

            if ($(window).width() >= 768) {
                if (!$header.hasClass('is-absolute')) {
                    $('.logo img', $header).attr('src', $('.logo img').data('src'));
                } else {
                    $('.logo img', $header).attr('src', $('.logo img').data('src-home'));
                }
            }
            $header.toggleClass('fadeInDown');
        });


        $(".animate_right").waypoint(function() {
            $(this).addClass("animated fadeInRight");
        }, {
            offset: '70%'
        });
        $(".animate_left").waypoint(function() {
            $(this).addClass("animated fadeInLeft");
        }, {
            offset: '70%'
        });
        $(".animate_up").waypoint(function() {
            $(this).addClass("animated fadeInUp");
        }, {
            offset: '70%'
        });
        $(".animate_down").waypoint(function() {
            $(this).addClass("animated fadeInDown");
        }, {
            offset: '70%'
        });
    }


    if ($(window).width() >= 768) {
        $('.logo img', $header).attr('src', $('.logo img').data('src-home'));
    } else {
        $('.logo img').attr('src', $('.logo img').data('src'));
    }


    $('#nav').mmenu({

        searchfield: {
            add: true,
            search: true,
            noResults: '<a href="/search?q=" class="search_link">' + "Advanced Search \u0026#8594;" + '</a>'
        },

        classes: "mm-white",
        offCanvas: {
            pageSelector: "#content_wrapper"
        },
    });

    $('.search_link').on("click", function() {
        $(this).attr("href", $(this).attr("href") + $(".mm-search input").val());
    })

    if ($('html').hasClass('ie')) {
        $('.icon-cart').on("click", function() {
            window.location = '/cart';
            return false;
        });
    } else {
        new Share(".share-button", {
            ui: {
                flyout: "bottom left",
                button_font: false,
                button_text: "Share"
            },
            networks: {
                facebook: {
                    load_sdk: false
                },
                email: {
                    description: escape($('meta[name=description]').attr("content")) + " - " + document.URL
                }
            }
        });


        $('.icon-cart').click(function() {
            window.location = '/cart';
            return false;
        });

        $('.icon-cart, .icon-menu').on("click", function(e) {
            $('#search').hide();
        });
    }

    $('.slider').flexslider({
        controlNav: false,
        animation: "fade"
    });

    $('.product_slider').flexslider({
        startAt: parseInt($('.featured_image', $(this)).data('index'), 10),
        touch: true,
        pauseOnHover: true,
        controlNav: "thumbnails",
        directionNav: true,

        animation: "slide",

        slideshowSpeed: 6 * 1000
    });


    if ($('.product_slider img').data("index") == 0) {
        $('.product_slider .flex-direction-nav').hide()
    }


    $(document).on("click", '.continue, .edit_cart, .mm-opened #header', function(e) {
        $('#cart').trigger("close");
        $('#nav').trigger("close");
        e.stopPropagation();
        e.preventDefault();
        return false;
    });

    $('#search-toggle, .search-close').on('click', function(e) {
        $('.search-close, .search-submit').css('padding-top', $('.header').height() + 50 + 'px')
        if ($('#search').is(":visible") && $(window).scrollTop() == 0) {
            $header.removeClass('header_bar');
            if ($('body.feature_image').length) {
                $('.logo img').attr('src', $('.logo img').data('src-home'));
            }
        } else {
            $header.addClass('header_bar');
            $('.logo img').attr('src', $('.logo img').data('src'));
        }

        if ($('#search').hasClass("fadeIn")) {
            $('#search').removeClass("fadeIn").hide();
        } else {
            $('#search').show().addClass("fadeIn").find('input').focus();
        }

        e.stopPropagation();
        e.preventDefault();
    })

    $(".search-submit").on('click', function(e) {
        $(this).parent('form').submit();
    });

    $('.lightbox').fancybox();

    if ($(window).width() >= 959) {
        $('.header_bar .dropdown').css({
            "top": $('.header').height()
        });
        $('.thumbnail').hover(function() {
            $('.quick_shop', this).show();
        }, function() {
            $('.quick_shop', this).hide();
        })
        var modal_width = '870px';
        if ($(window).width() >= 1200 || $('html').hasClass('ie')) {
            modal_width = '1110px'
        }
        $(".quick_shop").fancybox({
            width: modal_width,
            height: 'auto',
            autoSize: false,
            padding: 10,
            beforeShow: function(e) {
                var $gallery = $('.' + $(this.element).data('gallery'));
                var $product = $(this.element).data("fancybox-href");
                $("img", $gallery).unveil();
                $gallery.flexslider({
                    touch: false,
                    pauseOnHover: true,
                    controlNav: "thumbnails",
                    directionNav: true,

                    animation: "slide",

                    slideshowSpeed: 6 * 1000
                });

                $gallery.find(".fancybox:not(:first):not(:last)").fancybox({
                    padding: 0,
                    wrapCSS: 'gallery'
                });
                if ($gallery.find('img').data("index") == 0) {
                    $gallery.find('.flex-direction-nav').hide()
                }

            }
        });
    }

    $('.mm-search input').keypress(function(e) {
        if (e.which == 13) {
            window.location = '/search?q=' + $(this).val();
        }
    });


    $(".product_slider .fancybox:not(:first):not(:last)").fancybox({
        padding: 0,
        wrapCSS: 'gallery'
    });




    $('#tag_filter').change(function() {
        window.location = $('#tag_filter option:selected').val();
    });

    $("#cart_form input[type='number']").change(function() {

        $("#cart_form").submit();


    });


    Shopify.queryParams = {};
    if (location.search.length) {
        for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
            aKeyValue = aCouples[i].split('=');
            if (aKeyValue.length > 1) {
                Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
            }
        }
    }

    var tabs = $('ul.tabs');
    tabs.each(function(i) {
        var tab = $(this).find('> li > a');
        tab.click(function(e) {
            var contentLocation = $(this).attr('href');
            if (contentLocation.charAt(0) == "#") {
                e.preventDefault();
                tab.removeClass('active');
                $(this).addClass('active');
                $(this).parents('ul.tabs').next().find(contentLocation).show().css({
                    'display': 'block'
                }).addClass('active').siblings().hide().removeClass('active');
            }
        });
    });

    $('.toggle').click(function() {
        if ($(window).width() <= 767) {
            var $toggle = $(this);
            if ($toggle.next('ul').is(':visible')) {
                $toggle.next('ul').hide();
                $toggle.children('span').html('+');
            } else {
                $toggle.next('ul').show();
                $toggle.children('span').html('-');
            }
        }
    });

    var $contact_form = $('.newsletter .contact-form');
    $contact_form.each(function() {
        var $cf = $(this);
        $cf.on("submit", function(e) {

            $.ajax({
                type: $cf.attr('method'),
                url: $cf.attr('action'),
                data: $cf.serialize(),
                success: function(data) {
                    $contact_form.fadeOut("slow", function() {
                        $cf.prev('.message').html("Thank you for joining our mailing list!");
                    });
                }
            });
            e.preventDefault();

            setTimeout($.fancybox.close, 2000);
        });
    });

    var $notify_form = $('.notify_form .contact-form');
    $notify_form.each(function() {
        var $nf = $(this);
        $nf.on("submit", function(e) {
            if ($nf.find('.notify_email').val() != "") {
                $.ajax({
                    type: $nf.attr('method'),
                    url: $nf.attr('action'),
                    data: $nf.serialize(),
                    success: function(data) {
                        $notify_form.fadeOut("slow", function() {
                            $nf.prev('.message').html("Thanks! We will notify you when this product becomes available!");
                        });
                    }
                });
            } else {
                $nf.prev('.message').html("Please provide a valid email address.");
            }
            e.preventDefault();
        });
    });



    $('.maps').click(function() {
        $('.maps iframe').css("pointer-events", "auto");
    });


    $(function() {
        var $target = $("#instafeed");
        $target.instagramLite({
            username: $target.data('username'),
            clientID: $target.data('client-id'),
            urls: true,
            videos: true,
            limit: $target.data('count'),
            error: function(errorCode, errorMessage) {
                if (errorCode && errorMessage) {
                    alert(errorCode + ': ' + errorMessage);
                }
            }
        });
    });



    /*============================================================================
      Start of cart-related functionality
    ==============================================================================*/
    function ajaxSubmitCart() {
        $cart = $("#cart");
        $.ajax({
            url: '/cart.js',
            dataType: 'json',
            type: 'post',
            data: $cart.serialize(),
            success: function(data) {
                refreshCart(data);
            }
        });
    }

    function refreshCart(cart) {
        $cartBtn = $(".icon-cart");
        if ($cartBtn && $cartBtn.size()) {
            var value = $cartBtn.text() || '0';
            var cart_items_html = "";
            var $cart = $("#cart ul");

            $cartBtn.text(value.replace(/[0-9]+/, cart.item_count));
            $cart.find('li:not(:first)').remove();

            if (cart.item_count == 0) {
                $cart.append('<li class="empty_cart">Your Cart is Empty</li>');
            } else {
                $.each(cart.items, function(index, item) {
                    cart_items_html += '<li class="cart_item">' +
                        '<p class="mm-counter">' +
                        '<span class="ss-icon minus">&#x002D;</span>' +
                        '<input type="number" min="0" class="quantity" name="updates[]" id="updates_' + item.id + '" value="' + item.quantity + '" />' +
                        '<span class="ss-icon plus">&#x002B;</span>' +
                        '</p>' +
                        '<a href="' + item.url + '">';
                    if (item.image) {
                        cart_items_html += '<div class="cart_image">' +
                            '<img src="' + item.image.replace(/(\.[^.]*)$/, "_medium$1").replace('http:', '') + '" alt="' + htmlEncode(item.title) + '" />' +
                            '</div>';
                    }
                    cart_items_html += '<div class="item_title">' + item.title + '</div>' +
                        '<strong class="price">' + Shopify.formatMoney(item.price, $cart.data('money-format')) + '</strong>' +
                        '</a>' +
                        '</li>';
                });

                cart_items_html += '<li class="mm-label">' +
                    '<p class="mm-counter">' + Shopify.formatMoney(cart.total_price, $cart.data('money-format')) + '</p>' +
                    '<a href="/cart">' +
                    '<strong>Subtotal</strong>' +
                    '</a>' +
                    '</li>' +
                    '<li class="mm-subtitle clearfix">';




                cart_items_html += '<input type="submit" class="action_button right" value="Checkout" />' +
                    '<a href="javascript:void(0)" class="action_button edit_cart right">Continue</a>' +
                    '</li>';

                $cart.append(cart_items_html);
                $cart.find('li.cart_item:last').addClass('last_cart_item');


            }
        }
    }

    $(document).on('ready', function() {
        $('.five-simple-steps-gif').attr('src', 'https://cdn.shopify.com/s/files/1/0063/5942/files/box-animation_ecf5d8f7-9518-47fe-a71f-8686d32118b2.gif?12948519278290859042');
    });

    $(document).on("change", "#cart input.quantity", function() {

        ajaxSubmitCart();

    });

    $(document).on("click", ".minus", function() {
        var quantity = parseInt($(this).next("input").val());
        quantity -= 1;
        $(this).next("input").attr("value", quantity);
        if (quantity == 0) {
            $(this).closest('li.cart_item').addClass('animated fadeOutUp')
            setTimeout(ajaxSubmitCart, 500);
        } else {

            ajaxSubmitCart();

        }
    });
    $(document).on("click", ".plus", function() {
        var quantity = parseInt($(this).prev("input").val());
        quantity += 1;
        $(this).prev("input").attr("value", quantity);

        ajaxSubmitCart();

    });


    $(".product_form").submit(function(e) {
        e.preventDefault();
        var $addToCartForm = $(this);
        var $addToCartBtn = $addToCartForm.find('.add_to_cart');

        $.ajax({
            url: '/cart/add.js',
            dataType: 'json',
            type: 'post',
            data: $addToCartForm.serialize(),
            beforeSend: function() {
                $addToCartBtn.attr('disabled', 'disabled').addClass('disabled');
                $addToCartBtn.find('span').removeClass("zoomIn").addClass('animated zoomOut');
            },
            success: function(itemData) {
                $addToCartBtn.find('span').text("Added").removeClass('zoomOut').addClass('fadeIn');

                window.setTimeout(function() {
                    $addToCartBtn.removeAttr('disabled').removeClass('disabled');
                    $addToCartBtn.find('span').addClass("fadeOut").text($addToCartBtn.data('label')).removeClass('fadeIn').removeClass("fadeOut").addClass('zoomIn');
                }, 2000);

                // Tell the Angular app to refresh the minicart
                angularApp = document.getElementById('minicart');
                scope = angular.element(angularApp).scope();
                scope.updateCart();

                $('.purchase-confirmation').show();
            },
            error: function(XMLHttpRequest) {
                var response = eval('(' + XMLHttpRequest.responseText + ')');
                response = response.description;
                $('.warning').remove();

                var warning = '<p class="warning animated bounceIn">' + response.replace('All 1 ', 'All ') + '</p>';
                $addToCartBtn.after(warning);
                $addToCartBtn.removeAttr('disabled').removeClass('disabled');
                $addToCartBtn.find('span').text("Add to Cart").removeClass('zoomOut').addClass('zoomIn');
            }
        });

        return false;
    });


    selectCallback = function(variant, selector) {
        var $product = $('.product-' + selector.product.id);
        var $notify_form = $('.notify-form-' + selector.product.id);
        var $productForm = $('form.product_form', $product);

        if (variant && variant.featured_image && $product.is(":visible")) {
            var $slider = $('.product_gallery', $product);
            var original_image = $(".flex-active-slide img", $product),
                new_image = variant.featured_image;
            Shopify.Image.switchImage(new_image, original_image[0], function(new_image_src, original_image, element) {
                $slider.each(function() {
                    $(this).flexslider($('[data-image-id="' + variant.featured_image.id + '"]').data('index'));
                });
            });
        }

        if (variant) {
            $('.sku span', $product).text(variant.sku);
            $(".notify_form_message", $product).attr("value", $(".notify_form_message", $product).data('body') + " - " + variant.title);


        }

        if (variant && variant.available == true) {
            if (variant.price < variant.compare_at_price) {
                // $('.was_price', $product).html(Shopify.formatMoney(variant.compare_at_price, $productForm.data('money-format')))
            } else {
                // $('.was_price', $product).text('')
            }

            if (variant.inventory_management == "shopify" && variant.inventory_quantity > 0) {

                $('.quantity', $product).attr('max', variant.inventory_quantity);
            } else {
                $('.items_left', $product).text('');
                $('.quantity', $product).removeAttr('max');
            }

            $('.sold_out', $product).text('');
            $('.current_price', $product).html(Shopify.formatMoney(variant.price, $productForm.data('money-format')));
            $('.add_to_cart', $product).removeClass('disabled').removeAttr('disabled').find('span').text($('.add_to_cart', $product).data('label'));
            $notify_form.hide();
        } else {
            var message = variant ? "Sold Out" : "Unavailable";
            $('.was_price', $product).text('');
            $('.current_price', $product).text('');
            $('.items_left', $product).text('');
            $('.quantity', $product).removeAttr('max');
            $('.sold_out', $product).text(message);
            $('.add_to_cart', $product).addClass('disabled').attr('disabled', 'disabled').find('span').text(message);
            $notify_form.fadeIn();
        }


    };
});

function htmlEncode(value) {
    if (value) {
        return $('<div/>').text(value).html();
    } else {
        return '';
    }
}

/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
(function(r, G, f, v) {
    var J = f("html"),
        n = f(r),
        p = f(G),
        b = f.fancybox = function() {
            b.open.apply(this, arguments)
        },
        I = navigator.userAgent.match(/msie/i),
        B = null,
        s = G.createTouch !== v,
        t = function(a) {
            return a && a.hasOwnProperty && a instanceof f
        },
        q = function(a) {
            return a && "string" === f.type(a)
        },
        E = function(a) {
            return q(a) && 0 < a.indexOf("%")
        },
        l = function(a, d) {
            var e = parseInt(a, 10) || 0;
            d && E(a) && (e *= b.getViewport()[d] / 100);
            return Math.ceil(e)
        },
        w = function(a, b) {
            return l(a, b) + "px"
        };
    f.extend(b, {
        version: "2.1.5",
        defaults: {
            padding: 15,
            margin: 20,
            width: 800,
            height: 600,
            minWidth: 100,
            minHeight: 100,
            maxWidth: 9999,
            maxHeight: 9999,
            pixelRatio: 1,
            autoSize: !0,
            autoHeight: !1,
            autoWidth: !1,
            autoResize: !0,
            autoCenter: !s,
            fitToView: !0,
            aspectRatio: !1,
            topRatio: 0.5,
            leftRatio: 0.5,
            scrolling: "auto",
            wrapCSS: "",
            arrows: !0,
            closeBtn: !0,
            closeClick: !1,
            nextClick: !1,
            mouseWheel: !0,
            autoPlay: !1,
            playSpeed: 3E3,
            preload: 3,
            modal: !1,
            loop: !0,
            ajax: {
                dataType: "html",
                headers: {
                    "X-fancyBox": !0
                }
            },
            iframe: {
                scrolling: "auto",
                preload: !0
            },
            swf: {
                wmode: "transparent",
                allowfullscreen: "true",
                allowscriptaccess: "always"
            },
            keys: {
                next: {
                    13: "left",
                    34: "up",
                    39: "left",
                    40: "up"
                },
                prev: {
                    8: "right",
                    33: "down",
                    37: "right",
                    38: "down"
                },
                close: [27],
                play: [32],
                toggle: [70]
            },
            direction: {
                next: "left",
                prev: "right"
            },
            scrollOutside: !0,
            index: 0,
            type: null,
            href: null,
            content: null,
            title: null,
            tpl: {
                wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                image: '<img class="fancybox-image" src="{href}" alt="" />',
                iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
                    (I ? ' allowtransparency="true"' : "") + "></iframe>",
                error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                closeBtn: '<a title="Close" class="fancybox-item fancybox-close ss-icon" href="javascript:;">&#x2421;</a>',
                next: '<a title="Next" class="fancybox-nav fancybox-next ss-icon" href="javascript:;"><span>&#x25BB;</span></a>',
                prev: '<a title="Previous" class="fancybox-nav fancybox-prev ss-icon" href="javascript:;"><span>&#x25C5;</span></a>'
            },
            openEffect: "fade",
            openSpeed: 250,
            openEasing: "swing",
            openOpacity: !0,
            openMethod: "zoomIn",
            closeEffect: "fade",
            closeSpeed: 250,
            closeEasing: "swing",
            closeOpacity: !0,
            closeMethod: "zoomOut",
            nextEffect: "elastic",
            nextSpeed: 250,
            nextEasing: "swing",
            nextMethod: "changeIn",
            prevEffect: "elastic",
            prevSpeed: 250,
            prevEasing: "swing",
            prevMethod: "changeOut",
            helpers: {
                overlay: !0,
                title: !0
            },
            onCancel: f.noop,
            beforeLoad: f.noop,
            afterLoad: f.noop,
            beforeShow: f.noop,
            afterShow: f.noop,
            beforeChange: f.noop,
            beforeClose: f.noop,
            afterClose: f.noop
        },
        group: {},
        opts: {},
        previous: null,
        coming: null,
        current: null,
        isActive: !1,
        isOpen: !1,
        isOpened: !1,
        wrap: null,
        skin: null,
        outer: null,
        inner: null,
        player: {
            timer: null,
            isActive: !1
        },
        ajaxLoad: null,
        imgPreload: null,
        transitions: {},
        helpers: {},
        open: function(a, d) {
            if (a && (f.isPlainObject(d) || (d = {}), !1 !== b.close(!0))) return f.isArray(a) || (a = t(a) ? f(a).get() : [a]), f.each(a, function(e, c) {
                var k = {},
                    g, h, j, m, l;
                "object" === f.type(c) && (c.nodeType && (c = f(c)), t(c) ? (k = {
                    href: c.data("fancybox-href") || c.attr("href"),
                    title: c.data("fancybox-title") || c.attr("title"),
                    isDom: !0,
                    element: c
                }, f.metadata && f.extend(!0, k,
                    c.metadata())) : k = c);
                g = d.href || k.href || (q(c) ? c : null);
                h = d.title !== v ? d.title : k.title || "";
                m = (j = d.content || k.content) ? "html" : d.type || k.type;
                !m && k.isDom && (m = c.data("fancybox-type"), m || (m = (m = c.prop("class").match(/fancybox\.(\w+)/)) ? m[1] : null));
                q(g) && (m || (b.isImage(g) ? m = "image" : b.isSWF(g) ? m = "swf" : "#" === g.charAt(0) ? m = "inline" : q(c) && (m = "html", j = c)), "ajax" === m && (l = g.split(/\s+/, 2), g = l.shift(), l = l.shift()));
                j || ("inline" === m ? g ? j = f(q(g) ? g.replace(/.*(?=#[^\s]+$)/, "") : g) : k.isDom && (j = c) : "html" === m ? j = g : !m && (!g &&
                    k.isDom) && (m = "inline", j = c));
                f.extend(k, {
                    href: g,
                    type: m,
                    content: j,
                    title: h,
                    selector: l
                });
                a[e] = k
            }), b.opts = f.extend(!0, {}, b.defaults, d), d.keys !== v && (b.opts.keys = d.keys ? f.extend({}, b.defaults.keys, d.keys) : !1), b.group = a, b._start(b.opts.index)
        },
        cancel: function() {
            var a = b.coming;
            a && !1 !== b.trigger("onCancel") && (b.hideLoading(), b.ajaxLoad && b.ajaxLoad.abort(), b.ajaxLoad = null, b.imgPreload && (b.imgPreload.onload = b.imgPreload.onerror = null), a.wrap && a.wrap.stop(!0, !0).trigger("onReset").remove(), b.coming = null, b.current ||
                b._afterZoomOut(a))
        },
        close: function(a) {
            b.cancel();
            !1 !== b.trigger("beforeClose") && (b.unbindEvents(), b.isActive && (!b.isOpen || !0 === a ? (f(".fancybox-wrap").stop(!0).trigger("onReset").remove(), b._afterZoomOut()) : (b.isOpen = b.isOpened = !1, b.isClosing = !0, f(".fancybox-item, .fancybox-nav").remove(), b.wrap.stop(!0, !0).removeClass("fancybox-opened"), b.transitions[b.current.closeMethod]())))
        },
        play: function(a) {
            var d = function() {
                    clearTimeout(b.player.timer)
                },
                e = function() {
                    d();
                    b.current && b.player.isActive && (b.player.timer =
                        setTimeout(b.next, b.current.playSpeed))
                },
                c = function() {
                    d();
                    p.unbind(".player");
                    b.player.isActive = !1;
                    b.trigger("onPlayEnd")
                };
            if (!0 === a || !b.player.isActive && !1 !== a) {
                if (b.current && (b.current.loop || b.current.index < b.group.length - 1)) b.player.isActive = !0, p.bind({
                    "onCancel.player beforeClose.player": c,
                    "onUpdate.player": e,
                    "beforeLoad.player": d
                }), e(), b.trigger("onPlayStart")
            } else c()
        },
        next: function(a) {
            var d = b.current;
            d && (q(a) || (a = d.direction.next), b.jumpto(d.index + 1, a, "next"))
        },
        prev: function(a) {
            var d = b.current;
            d && (q(a) || (a = d.direction.prev), b.jumpto(d.index - 1, a, "prev"))
        },
        jumpto: function(a, d, e) {
            var c = b.current;
            c && (a = l(a), b.direction = d || c.direction[a >= c.index ? "next" : "prev"], b.router = e || "jumpto", c.loop && (0 > a && (a = c.group.length + a % c.group.length), a %= c.group.length), c.group[a] !== v && (b.cancel(), b._start(a)))
        },
        reposition: function(a, d) {
            var e = b.current,
                c = e ? e.wrap : null,
                k;
            c && (k = b._getPosition(d), a && "scroll" === a.type ? (delete k.position, c.stop(!0, !0).animate(k, 200)) : (c.css(k), e.pos = f.extend({}, e.dim, k)))
        },
        update: function(a) {
            var d =
                a && a.type,
                e = !d || "orientationchange" === d;
            e && (clearTimeout(B), B = null);
            b.isOpen && !B && (B = setTimeout(function() {
                var c = b.current;
                c && !b.isClosing && (b.wrap.removeClass("fancybox-tmp"), (e || "load" === d || "resize" === d && c.autoResize) && b._setDimension(), "scroll" === d && c.canShrink || b.reposition(a), b.trigger("onUpdate"), B = null)
            }, e && !s ? 0 : 300))
        },
        toggle: function(a) {
            b.isOpen && (b.current.fitToView = "boolean" === f.type(a) ? a : !b.current.fitToView, s && (b.wrap.removeAttr("style").addClass("fancybox-tmp"), b.trigger("onUpdate")),
                b.update())
        },
        hideLoading: function() {
            p.unbind(".loading");
            f("#fancybox-loading").remove()
        },
        showLoading: function() {
            var a, d;
            b.hideLoading();
            a = f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");
            p.bind("keydown.loading", function(a) {
                if (27 === (a.which || a.keyCode)) a.preventDefault(), b.cancel()
            });
            b.defaults.fixed || (d = b.getViewport(), a.css({
                position: "absolute",
                top: 0.5 * d.h + d.y,
                left: 0.5 * d.w + d.x
            }))
        },
        getViewport: function() {
            var a = b.current && b.current.locked || !1,
                d = {
                    x: n.scrollLeft(),
                    y: n.scrollTop()
                };
            a ? (d.w = a[0].clientWidth, d.h = a[0].clientHeight) : (d.w = s && r.innerWidth ? r.innerWidth : n.width(), d.h = s && r.innerHeight ? r.innerHeight : n.height());
            return d
        },
        unbindEvents: function() {
            b.wrap && t(b.wrap) && b.wrap.unbind(".fb");
            p.unbind(".fb");
            n.unbind(".fb")
        },
        bindEvents: function() {
            var a = b.current,
                d;
            a && (n.bind("orientationchange.fb" + (s ? "" : " resize.fb") + (a.autoCenter && !a.locked ? " scroll.fb" : ""), b.update), (d = a.keys) && p.bind("keydown.fb", function(e) {
                var c = e.which || e.keyCode,
                    k = e.target || e.srcElement;
                if (27 === c && b.coming) return !1;
                !e.ctrlKey && (!e.altKey && !e.shiftKey && !e.metaKey && (!k || !k.type && !f(k).is("[contenteditable]"))) && f.each(d, function(d, k) {
                    if (1 < a.group.length && k[c] !== v) return b[d](k[c]), e.preventDefault(), !1;
                    if (-1 < f.inArray(c, k)) return b[d](), e.preventDefault(), !1
                })
            }), f.fn.mousewheel && a.mouseWheel && b.wrap.bind("mousewheel.fb", function(d, c, k, g) {
                for (var h = f(d.target || null), j = !1; h.length && !j && !h.is(".fancybox-skin") && !h.is(".fancybox-wrap");) j = h[0] && !(h[0].style.overflow && "hidden" === h[0].style.overflow) &&
                    (h[0].clientWidth && h[0].scrollWidth > h[0].clientWidth || h[0].clientHeight && h[0].scrollHeight > h[0].clientHeight), h = f(h).parent();
                if (0 !== c && !j && 1 < b.group.length && !a.canShrink) {
                    if (0 < g || 0 < k) b.prev(0 < g ? "down" : "left");
                    else if (0 > g || 0 > k) b.next(0 > g ? "up" : "right");
                    d.preventDefault()
                }
            }))
        },
        trigger: function(a, d) {
            var e, c = d || b.coming || b.current;
            if (c) {
                f.isFunction(c[a]) && (e = c[a].apply(c, Array.prototype.slice.call(arguments, 1)));
                if (!1 === e) return !1;
                c.helpers && f.each(c.helpers, function(d, e) {
                    if (e && b.helpers[d] && f.isFunction(b.helpers[d][a])) b.helpers[d][a](f.extend(!0, {}, b.helpers[d].defaults, e), c)
                });
                p.trigger(a)
            }
        },
        isImage: function(a) {
            return q(a) && a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
        },
        isSWF: function(a) {
            return q(a) && a.match(/\.(swf)((\?|#).*)?$/i)
        },
        _start: function(a) {
            var d = {},
                e, c;
            a = l(a);
            e = b.group[a] || null;
            if (!e) return !1;
            d = f.extend(!0, {}, b.opts, e);
            e = d.margin;
            c = d.padding;
            "number" === f.type(e) && (d.margin = [e, e, e, e]);
            "number" === f.type(c) && (d.padding = [c, c, c, c]);
            d.modal && f.extend(!0, d, {
                closeBtn: !1,
                closeClick: !1,
                nextClick: !1,
                arrows: !1,
                mouseWheel: !1,
                keys: null,
                helpers: {
                    overlay: {
                        closeClick: !1
                    }
                }
            });
            d.autoSize && (d.autoWidth = d.autoHeight = !0);
            "auto" === d.width && (d.autoWidth = !0);
            "auto" === d.height && (d.autoHeight = !0);
            d.group = b.group;
            d.index = a;
            b.coming = d;
            if (!1 === b.trigger("beforeLoad")) b.coming = null;
            else {
                c = d.type;
                e = d.href;
                if (!c) return b.coming = null, b.current && b.router && "jumpto" !== b.router ? (b.current.index = a, b[b.router](b.direction)) : !1;
                b.isActive = !0;
                if ("image" === c || "swf" === c) d.autoHeight = d.autoWidth = !1, d.scrolling = "visible";
                "image" === c && (d.aspectRatio = !0);
                "iframe" === c && s && (d.scrolling = "scroll");
                d.wrap = f(d.tpl.wrap).addClass("fancybox-" + (s ? "mobile" : "desktop") + " fancybox-type-" + c + " fancybox-tmp " + d.wrapCSS).appendTo(d.parent || "body");
                f.extend(d, {
                    skin: f(".fancybox-skin", d.wrap),
                    outer: f(".fancybox-outer", d.wrap),
                    inner: f(".fancybox-inner", d.wrap)
                });
                f.each(["Top", "Right", "Bottom", "Left"], function(a, b) {
                    d.skin.css("padding" + b, w(d.padding[a]))
                });
                b.trigger("onReady");
                if ("inline" === c || "html" === c) {
                    if (!d.content || !d.content.length) return b._error("content")
                } else if (!e) return b._error("href");
                "image" === c ? b._loadImage() : "ajax" === c ? b._loadAjax() : "iframe" === c ? b._loadIframe() : b._afterLoad()
            }
        },
        _error: function(a) {
            f.extend(b.coming, {
                type: "html",
                autoWidth: !0,
                autoHeight: !0,
                minWidth: 0,
                minHeight: 0,
                scrolling: "no",
                hasError: a,
                content: b.coming.tpl.error
            });
            b._afterLoad()
        },
        _loadImage: function() {
            var a = b.imgPreload = new Image;
            a.onload = function() {
                this.onload = this.onerror = null;
                b.coming.width = this.width / b.opts.pixelRatio;
                b.coming.height = this.height / b.opts.pixelRatio;
                b._afterLoad()
            };
            a.onerror = function() {
                this.onload =
                    this.onerror = null;
                b._error("image")
            };
            a.src = b.coming.href;
            !0 !== a.complete && b.showLoading()
        },
        _loadAjax: function() {
            var a = b.coming;
            b.showLoading();
            b.ajaxLoad = f.ajax(f.extend({}, a.ajax, {
                url: a.href,
                error: function(a, e) {
                    b.coming && "abort" !== e ? b._error("ajax", a) : b.hideLoading()
                },
                success: function(d, e) {
                    "success" === e && (a.content = d, b._afterLoad())
                }
            }))
        },
        _loadIframe: function() {
            var a = b.coming,
                d = f(a.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", s ? "auto" : a.iframe.scrolling).attr("src", a.href);
            f(a.wrap).bind("onReset", function() {
                try {
                    f(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
                } catch (a) {}
            });
            a.iframe.preload && (b.showLoading(), d.one("load", function() {
                f(this).data("ready", 1);
                s || f(this).bind("load.fb", b.update);
                f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();
                b._afterLoad()
            }));
            a.content = d.appendTo(a.inner);
            a.iframe.preload || b._afterLoad()
        },
        _preloadImages: function() {
            var a = b.group,
                d = b.current,
                e = a.length,
                c = d.preload ? Math.min(d.preload,
                    e - 1) : 0,
                f, g;
            for (g = 1; g <= c; g += 1) f = a[(d.index + g) % e], "image" === f.type && f.href && ((new Image).src = f.href)
        },
        _afterLoad: function() {
            var a = b.coming,
                d = b.current,
                e, c, k, g, h;
            b.hideLoading();
            if (a && !1 !== b.isActive)
                if (!1 === b.trigger("afterLoad", a, d)) a.wrap.stop(!0).trigger("onReset").remove(), b.coming = null;
                else {
                    d && (b.trigger("beforeChange", d), d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());
                    b.unbindEvents();
                    e = a.content;
                    c = a.type;
                    k = a.scrolling;
                    f.extend(b, {
                        wrap: a.wrap,
                        skin: a.skin,
                        outer: a.outer,
                        inner: a.inner,
                        current: a,
                        previous: d
                    });
                    g = a.href;
                    switch (c) {
                        case "inline":
                        case "ajax":
                        case "html":
                            a.selector ? e = f("<div>").html(e).find(a.selector) : t(e) && (e.data("fancybox-placeholder") || e.data("fancybox-placeholder", f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()), e = e.show().detach(), a.wrap.bind("onReset", function() {
                                f(this).find(e).length && e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder", !1)
                            }));
                            break;
                        case "image":
                            e = a.tpl.image.replace("{href}",
                                g);
                            break;
                        case "swf":
                            e = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + g + '"></param>', h = "", f.each(a.swf, function(a, b) {
                                e += '<param name="' + a + '" value="' + b + '"></param>';
                                h += " " + a + '="' + b + '"'
                            }), e += '<embed src="' + g + '" type="application/x-shockwave-flash" width="100%" height="100%"' + h + "></embed></object>"
                    }(!t(e) || !e.parent().is(a.inner)) && a.inner.append(e);
                    b.trigger("beforeShow");
                    a.inner.css("overflow", "yes" === k ? "scroll" :
                        "no" === k ? "hidden" : k);
                    b._setDimension();
                    b.reposition();
                    b.isOpen = !1;
                    b.coming = null;
                    b.bindEvents();
                    if (b.isOpened) {
                        if (d.prevMethod) b.transitions[d.prevMethod]()
                    } else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();
                    b.transitions[b.isOpened ? a.nextMethod : a.openMethod]();
                    b._preloadImages()
                }
        },
        _setDimension: function() {
            var a = b.getViewport(),
                d = 0,
                e = !1,
                c = !1,
                e = b.wrap,
                k = b.skin,
                g = b.inner,
                h = b.current,
                c = h.width,
                j = h.height,
                m = h.minWidth,
                u = h.minHeight,
                n = h.maxWidth,
                p = h.maxHeight,
                s = h.scrolling,
                q = h.scrollOutside ?
                h.scrollbarWidth : 0,
                x = h.margin,
                y = l(x[1] + x[3]),
                r = l(x[0] + x[2]),
                v, z, t, C, A, F, B, D, H;
            e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");
            x = l(k.outerWidth(!0) - k.width());
            v = l(k.outerHeight(!0) - k.height());
            z = y + x;
            t = r + v;
            C = E(c) ? (a.w - z) * l(c) / 100 : c;
            A = E(j) ? (a.h - t) * l(j) / 100 : j;
            if ("iframe" === h.type) {
                if (H = h.content, h.autoHeight && 1 === H.data("ready")) try {
                    H[0].contentWindow.document.location && (g.width(C).height(9999), F = H.contents().find("body"), q && F.css("overflow-x", "hidden"), A = F.outerHeight(!0))
                } catch (G) {}
            } else if (h.autoWidth ||
                h.autoHeight) g.addClass("fancybox-tmp"), h.autoWidth || g.width(C), h.autoHeight || g.height(A), h.autoWidth && (C = g.width()), h.autoHeight && (A = g.height()), g.removeClass("fancybox-tmp");
            c = l(C);
            j = l(A);
            D = C / A;
            m = l(E(m) ? l(m, "w") - z : m);
            n = l(E(n) ? l(n, "w") - z : n);
            u = l(E(u) ? l(u, "h") - t : u);
            p = l(E(p) ? l(p, "h") - t : p);
            F = n;
            B = p;
            h.fitToView && (n = Math.min(a.w - z, n), p = Math.min(a.h - t, p));
            z = a.w - y;
            r = a.h - r;
            h.aspectRatio ? (c > n && (c = n, j = l(c / D)), j > p && (j = p, c = l(j * D)), c < m && (c = m, j = l(c / D)), j < u && (j = u, c = l(j * D))) : (c = Math.max(m, Math.min(c, n)), h.autoHeight &&
                "iframe" !== h.type && (g.width(c), j = g.height()), j = Math.max(u, Math.min(j, p)));
            if (h.fitToView)
                if (g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height(), h.aspectRatio)
                    for (;
                        (a > z || y > r) && (c > m && j > u) && !(19 < d++);) j = Math.max(u, Math.min(p, j - 10)), c = l(j * D), c < m && (c = m, j = l(c / D)), c > n && (c = n, j = l(c / D)), g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height();
                else c = Math.max(m, Math.min(c, c - (a - z))), j = Math.max(u, Math.min(j, j - (y - r)));
            q && ("auto" === s && j < A && c + x + q < z) && (c += q);
            g.width(c).height(j);
            e.width(c + x);
            a = e.width();
            y = e.height();
            e = (a > z || y > r) && c > m && j > u;
            c = h.aspectRatio ? c < F && j < B && c < C && j < A : (c < F || j < B) && (c < C || j < A);
            f.extend(h, {
                dim: {
                    width: w(a),
                    height: w(y)
                },
                origWidth: C,
                origHeight: A,
                canShrink: e,
                canExpand: c,
                wPadding: x,
                hPadding: v,
                wrapSpace: y - k.outerHeight(!0),
                skinSpace: k.height() - j
            });
            !H && (h.autoHeight && j > u && j < p && !c) && g.height("auto")
        },
        _getPosition: function(a) {
            var d = b.current,
                e = b.getViewport(),
                c = d.margin,
                f = b.wrap.width() + c[1] + c[3],
                g = b.wrap.height() + c[0] + c[2],
                c = {
                    position: "absolute",
                    top: c[0],
                    left: c[3]
                };
            d.autoCenter && d.fixed &&
                !a && g <= e.h && f <= e.w ? c.position = "fixed" : d.locked || (c.top += e.y, c.left += e.x);
            c.top = w(Math.max(c.top, c.top + (e.h - g) * d.topRatio));
            c.left = w(Math.max(c.left, c.left + (e.w - f) * d.leftRatio));
            return c
        },
        _afterZoomIn: function() {
            var a = b.current;
            a && (b.isOpen = b.isOpened = !0, b.wrap.css("overflow", "visible").addClass("fancybox-opened"), b.update(), (a.closeClick || a.nextClick && 1 < b.group.length) && b.inner.css("cursor", "pointer").bind("click.fb", function(d) {
                !f(d.target).is("a") && !f(d.target).parent().is("a") && (d.preventDefault(),
                    b[a.closeClick ? "close" : "next"]())
            }), a.closeBtn && f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb", function(a) {
                a.preventDefault();
                b.close()
            }), a.arrows && 1 < b.group.length && ((a.loop || 0 < a.index) && f(a.tpl.prev).appendTo(b.outer).bind("click.fb", b.prev), (a.loop || a.index < b.group.length - 1) && f(a.tpl.next).appendTo(b.outer).bind("click.fb", b.next)), b.trigger("afterShow"), !a.loop && a.index === a.group.length - 1 ? b.play(!1) : b.opts.autoPlay && !b.player.isActive && (b.opts.autoPlay = !1, b.play()))
        },
        _afterZoomOut: function(a) {
            a =
                a || b.current;
            f(".fancybox-wrap").trigger("onReset").remove();
            f.extend(b, {
                group: {},
                opts: {},
                router: !1,
                current: null,
                isActive: !1,
                isOpened: !1,
                isOpen: !1,
                isClosing: !1,
                wrap: null,
                skin: null,
                outer: null,
                inner: null
            });
            b.trigger("afterClose", a)
        }
    });
    b.transitions = {
        getOrigPosition: function() {
            var a = b.current,
                d = a.element,
                e = a.orig,
                c = {},
                f = 50,
                g = 50,
                h = a.hPadding,
                j = a.wPadding,
                m = b.getViewport();
            !e && (a.isDom && d.is(":visible")) && (e = d.find("img:first"), e.length || (e = d));
            t(e) ? (c = e.offset(), e.is("img") && (f = e.outerWidth(), g = e.outerHeight())) :
                (c.top = m.y + (m.h - g) * a.topRatio, c.left = m.x + (m.w - f) * a.leftRatio);
            if ("fixed" === b.wrap.css("position") || a.locked) c.top -= m.y, c.left -= m.x;
            return c = {
                top: w(c.top - h * a.topRatio),
                left: w(c.left - j * a.leftRatio),
                width: w(f + j),
                height: w(g + h)
            }
        },
        step: function(a, d) {
            var e, c, f = d.prop;
            c = b.current;
            var g = c.wrapSpace,
                h = c.skinSpace;
            if ("width" === f || "height" === f) e = d.end === d.start ? 1 : (a - d.start) / (d.end - d.start), b.isClosing && (e = 1 - e), c = "width" === f ? c.wPadding : c.hPadding, c = a - c, b.skin[f](l("width" === f ? c : c - g * e)), b.inner[f](l("width" ===
                f ? c : c - g * e - h * e))
        },
        zoomIn: function() {
            var a = b.current,
                d = a.pos,
                e = a.openEffect,
                c = "elastic" === e,
                k = f.extend({
                    opacity: 1
                }, d);
            delete k.position;
            c ? (d = this.getOrigPosition(), a.openOpacity && (d.opacity = 0.1)) : "fade" === e && (d.opacity = 0.1);
            b.wrap.css(d).animate(k, {
                duration: "none" === e ? 0 : a.openSpeed,
                easing: a.openEasing,
                step: c ? this.step : null,
                complete: b._afterZoomIn
            })
        },
        zoomOut: function() {
            var a = b.current,
                d = a.closeEffect,
                e = "elastic" === d,
                c = {
                    opacity: 0.1
                };
            e && (c = this.getOrigPosition(), a.closeOpacity && (c.opacity = 0.1));
            b.wrap.animate(c, {
                duration: "none" === d ? 0 : a.closeSpeed,
                easing: a.closeEasing,
                step: e ? this.step : null,
                complete: b._afterZoomOut
            })
        },
        changeIn: function() {
            var a = b.current,
                d = a.nextEffect,
                e = a.pos,
                c = {
                    opacity: 1
                },
                f = b.direction,
                g;
            e.opacity = 0.1;
            "elastic" === d && (g = "down" === f || "up" === f ? "top" : "left", "down" === f || "right" === f ? (e[g] = w(l(e[g]) - 200), c[g] = "+=200px") : (e[g] = w(l(e[g]) + 200), c[g] = "-=200px"));
            "none" === d ? b._afterZoomIn() : b.wrap.css(e).animate(c, {
                duration: a.nextSpeed,
                easing: a.nextEasing,
                complete: b._afterZoomIn
            })
        },
        changeOut: function() {
            var a =
                b.previous,
                d = a.prevEffect,
                e = {
                    opacity: 0.1
                },
                c = b.direction;
            "elastic" === d && (e["down" === c || "up" === c ? "top" : "left"] = ("up" === c || "left" === c ? "-" : "+") + "=200px");
            a.wrap.animate(e, {
                duration: "none" === d ? 0 : a.prevSpeed,
                easing: a.prevEasing,
                complete: function() {
                    f(this).trigger("onReset").remove()
                }
            })
        }
    };
    b.helpers.overlay = {
        defaults: {
            closeClick: !0,
            speedOut: 200,
            showEarly: !0,
            css: {},
            locked: !s,
            fixed: !0
        },
        overlay: null,
        fixed: !1,
        el: f("html"),
        create: function(a) {
            a = f.extend({}, this.defaults, a);
            this.overlay && this.close();
            this.overlay =
                f('<div class="fancybox-overlay"></div>').appendTo(b.coming ? b.coming.parent : a.parent);
            this.fixed = !1;
            a.fixed && b.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
        },
        open: function(a) {
            var d = this;
            a = f.extend({}, this.defaults, a);
            this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(a);
            this.fixed || (n.bind("resize.overlay", f.proxy(this.update, this)), this.update());
            a.closeClick && this.overlay.bind("click.overlay", function(a) {
                if (f(a.target).hasClass("fancybox-overlay")) return b.isActive ?
                    b.close() : d.close(), !1
            });
            this.overlay.css(a.css).show()
        },
        close: function() {
            var a, b;
            n.unbind("resize.overlay");
            this.el.hasClass("fancybox-lock") && (f(".fancybox-margin").removeClass("fancybox-margin"), a = n.scrollTop(), b = n.scrollLeft(), this.el.removeClass("fancybox-lock"), n.scrollTop(a).scrollLeft(b));
            f(".fancybox-overlay").remove().hide();
            f.extend(this, {
                overlay: null,
                fixed: !1
            })
        },
        update: function() {
            var a = "100%",
                b;
            this.overlay.width(a).height("100%");
            I ? (b = Math.max(G.documentElement.offsetWidth, G.body.offsetWidth),
                p.width() > b && (a = p.width())) : p.width() > n.width() && (a = p.width());
            this.overlay.width(a).height(p.height())
        },
        onReady: function(a, b) {
            var e = this.overlay;
            f(".fancybox-overlay").stop(!0, !0);
            e || this.create(a);
            a.locked && (this.fixed && b.fixed) && (e || (this.margin = p.height() > n.height() ? f("html").css("margin-right").replace("px", "") : !1), b.locked = this.overlay.append(b.wrap), b.fixed = !1);
            !0 === a.showEarly && this.beforeShow.apply(this, arguments)
        },
        beforeShow: function(a, b) {
            var e, c;
            b.locked && (!1 !== this.margin && (f("*").filter(function() {
                return "fixed" ===
                    f(this).css("position") && !f(this).hasClass("fancybox-overlay") && !f(this).hasClass("fancybox-wrap")
            }).addClass("fancybox-margin"), this.el.addClass("fancybox-margin")), e = n.scrollTop(), c = n.scrollLeft(), this.el.addClass("fancybox-lock"), n.scrollTop(e).scrollLeft(c));
            this.open(a)
        },
        onUpdate: function() {
            this.fixed || this.update()
        },
        afterClose: function(a) {
            this.overlay && !b.coming && this.overlay.fadeOut(a.speedOut, f.proxy(this.close, this))
        }
    };
    b.helpers.title = {
        defaults: {
            type: "float",
            position: "bottom"
        },
        beforeShow: function(a) {
            var d =
                b.current,
                e = d.title,
                c = a.type;
            f.isFunction(e) && (e = e.call(d.element, d));
            if (q(e) && "" !== f.trim(e)) {
                d = f('<div class="fancybox-title fancybox-title-' + c + '-wrap">' + e + "</div>");
                switch (c) {
                    case "inside":
                        c = b.skin;
                        break;
                    case "outside":
                        c = b.wrap;
                        break;
                    case "over":
                        c = b.inner;
                        break;
                    default:
                        c = b.skin, d.appendTo("body"), I && d.width(d.width()), d.wrapInner('<span class="child"></span>'), b.current.margin[2] += Math.abs(l(d.css("margin-bottom")))
                }
                d["top" === a.position ? "prependTo" : "appendTo"](c)
            }
        }
    };
    f.fn.fancybox = function(a) {
        var d,
            e = f(this),
            c = this.selector || "",
            k = function(g) {
                var h = f(this).blur(),
                    j = d,
                    k, l;
                !g.ctrlKey && (!g.altKey && !g.shiftKey && !g.metaKey) && !h.is(".fancybox-wrap") && (k = a.groupAttr || "data-fancybox-group", l = h.attr(k), l || (k = "rel", l = h.get(0)[k]), l && ("" !== l && "nofollow" !== l) && (h = c.length ? f(c) : e, h = h.filter("[" + k + '="' + l + '"]'), j = h.index(this)), a.index = j, !1 !== b.open(h, a) && g.preventDefault())
            };
        a = a || {};
        d = a.index || 0;
        !c || !1 === a.live ? e.unbind("click.fb-start").bind("click.fb-start", k) : p.undelegate(c, "click.fb-start").delegate(c +
            ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", k);
        this.filter("[data-fancybox-start=1]").trigger("click");
        return this
    };
    p.ready(function() {
        var a, d;
        f.scrollbarWidth === v && (f.scrollbarWidth = function() {
            var a = f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
                b = a.children(),
                b = b.innerWidth() - b.height(99).innerWidth();
            a.remove();
            return b
        });
        if (f.support.fixedPosition === v) {
            a = f.support;
            d = f('<div style="position:fixed;top:20px;"></div>').appendTo("body");
            var e = 20 ===
                d[0].offsetTop || 15 === d[0].offsetTop;
            d.remove();
            a.fixedPosition = e
        }
        f.extend(b.defaults, {
            scrollbarWidth: f.scrollbarWidth(),
            fixed: f.support.fixedPosition,
            parent: f("body")
        });
        a = f(r).width();
        J.addClass("fancybox-lock-test");
        d = f(r).width();
        J.removeClass("fancybox-lock-test");
        f("<style type='text/css'>.fancybox-margin{margin-right:" + (d - a) + "px;}</style>").appendTo("head")
    })
})(window, document, jQuery);

/*
 * jQuery FlexSlider v2.5.0
 * Copyright 2012 WooThemes
 * Contributing Author: Tyler Smith
 */
! function($) {
    $.flexslider = function(e, t) {
        var a = $(e);
        a.vars = $.extend({}, $.flexslider.defaults, t);
        var n = a.vars.namespace,
            i = window.navigator && window.navigator.msPointerEnabled && window.MSGesture,
            s = ("ontouchstart" in window || i || window.DocumentTouch && document instanceof DocumentTouch) && a.vars.touch,
            r = "click touchend MSPointerUp keyup",
            o = "",
            l, c = "vertical" === a.vars.direction,
            d = a.vars.reverse,
            u = a.vars.itemWidth > 0,
            v = "fade" === a.vars.animation,
            p = "" !== a.vars.asNavFor,
            m = {},
            f = !0;
        $.data(e, "flexslider", a), m = {
            init: function() {
                a.animating = !1, a.currentSlide = parseInt(a.vars.startAt ? a.vars.startAt : 0, 10), isNaN(a.currentSlide) && (a.currentSlide = 0), a.animatingTo = a.currentSlide, a.atEnd = 0 === a.currentSlide || a.currentSlide === a.last, a.containerSelector = a.vars.selector.substr(0, a.vars.selector.search(" ")), a.slides = $(a.vars.selector, a), a.container = $(a.containerSelector, a), a.count = a.slides.length, a.syncExists = $(a.vars.sync).length > 0, "slide" === a.vars.animation && (a.vars.animation = "swing"), a.prop = c ? "top" : "marginLeft", a.args = {}, a.manualPause = !1, a.stopped = !1, a.started = !1, a.startTimeout = null, a.transitions = !a.vars.video && !v && a.vars.useCSS && function() {
                    var e = document.createElement("div"),
                        t = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                    for (var n in t)
                        if (void 0 !== e.style[t[n]]) return a.pfx = t[n].replace("Perspective", "").toLowerCase(), a.prop = "-" + a.pfx + "-transform", !0;
                    return !1
                }(), a.ensureAnimationEnd = "", "" !== a.vars.controlsContainer && (a.controlsContainer = $(a.vars.controlsContainer).length > 0 && $(a.vars.controlsContainer)), "" !== a.vars.manualControls && (a.manualControls = $(a.vars.manualControls).length > 0 && $(a.vars.manualControls)), "" !== a.vars.customDirectionNav && (a.customDirectionNav = 2 === $(a.vars.customDirectionNav).length && $(a.vars.customDirectionNav)), a.vars.randomize && (a.slides.sort(function() {
                    return Math.round(Math.random()) - .5
                }), a.container.empty().append(a.slides)), a.doMath(), a.setup("init"), a.vars.controlNav && m.controlNav.setup(), a.vars.directionNav && m.directionNav.setup(), a.vars.keyboard && (1 === $(a.containerSelector).length || a.vars.multipleKeyboard) && $(document).bind("keyup", function(e) {
                    var t = e.keyCode;
                    if (!a.animating && (39 === t || 37 === t)) {
                        var n = 39 === t ? a.getTarget("next") : 37 === t ? a.getTarget("prev") : !1;
                        a.flexAnimate(n, a.vars.pauseOnAction)
                    }
                }), a.vars.mousewheel && a.bind("mousewheel", function(e, t, n, i) {
                    e.preventDefault();
                    var s = a.getTarget(0 > t ? "next" : "prev");
                    a.flexAnimate(s, a.vars.pauseOnAction)
                }), a.vars.pausePlay && m.pausePlay.setup(), a.vars.slideshow && a.vars.pauseInvisible && m.pauseInvisible.init(), a.vars.slideshow && (a.vars.pauseOnHover && a.hover(function() {
                    a.manualPlay || a.manualPause || a.pause()
                }, function() {
                    a.manualPause || a.manualPlay || a.stopped || a.play()
                }), a.vars.pauseInvisible && m.pauseInvisible.isHidden() || (a.vars.initDelay > 0 ? a.startTimeout = setTimeout(a.play, a.vars.initDelay) : a.play())), p && m.asNav.setup(), s && a.vars.touch && m.touch(), (!v || v && a.vars.smoothHeight) && $(window).bind("resize orientationchange focus", m.resize), a.find("img").attr("draggable", "false"), setTimeout(function() {
                    a.vars.start(a)
                }, 200)
            },
            asNav: {
                setup: function() {
                    a.asNav = !0, a.animatingTo = Math.floor(a.currentSlide / a.move), a.currentItem = a.currentSlide, a.slides.removeClass(n + "active-slide").eq(a.currentItem).addClass(n + "active-slide"), i ? (e._slider = a, a.slides.each(function() {
                        var e = this;
                        e._gesture = new MSGesture, e._gesture.target = e, e.addEventListener("MSPointerDown", function(e) {
                            e.preventDefault(), e.currentTarget._gesture && e.currentTarget._gesture.addPointer(e.pointerId)
                        }, !1), e.addEventListener("MSGestureTap", function(e) {
                            e.preventDefault();
                            var t = $(this),
                                n = t.index();
                            $(a.vars.asNavFor).data("flexslider").animating || t.hasClass("active") || (a.direction = a.currentItem < n ? "next" : "prev", a.flexAnimate(n, a.vars.pauseOnAction, !1, !0, !0))
                        })
                    })) : a.slides.on(r, function(e) {
                        e.preventDefault();
                        var t = $(this),
                            i = t.index(),
                            s = t.offset().left - $(a).scrollLeft();
                        0 >= s && t.hasClass(n + "active-slide") ? a.flexAnimate(a.getTarget("prev"), !0) : $(a.vars.asNavFor).data("flexslider").animating || t.hasClass(n + "active-slide") || (a.direction = a.currentItem < i ? "next" : "prev", a.flexAnimate(i, a.vars.pauseOnAction, !1, !0, !0))
                    })
                }
            },
            controlNav: {
                setup: function() {
                    a.manualControls ? m.controlNav.setupManual() : m.controlNav.setupPaging()
                },
                setupPaging: function() {
                    var e = "thumbnails" === a.vars.controlNav ? "control-thumbs" : "control-paging",
                        t = 1,
                        i, s;
                    if (a.controlNavScaffold = $('<ol class="' + n + "control-nav " + n + e + '"></ol>'), a.pagingCount > 1)
                        for (var l = 0; l < a.pagingCount; l++) {
                            if (s = a.slides.eq(l), i = "thumbnails" === a.vars.controlNav ? '<img src="' + s.attr("data-thumb") + '"/>' : "<a>" + t + "</a>", "thumbnails" === a.vars.controlNav && !0 === a.vars.thumbCaptions) {
                                var c = s.attr("data-thumbcaption");
                                "" !== c && void 0 !== c && (i += '<span class="' + n + 'caption">' + c + "</span>")
                            }
                            a.controlNavScaffold.append("<li>" + i + "</li>"), t++
                        }
                    a.controlsContainer ? $(a.controlsContainer).append(a.controlNavScaffold) : a.append(a.controlNavScaffold), m.controlNav.set(), m.controlNav.active(), a.controlNavScaffold.delegate("a, img", r, function(e) {
                        if (e.preventDefault(), "" === o || o === e.type) {
                            var t = $(this),
                                i = a.controlNav.index(t);
                            t.hasClass(n + "active") || (a.direction = i > a.currentSlide ? "next" : "prev", a.flexAnimate(i, a.vars.pauseOnAction))
                        }
                        "" === o && (o = e.type), m.setToClearWatchedEvent()
                    })
                },
                setupManual: function() {
                    a.controlNav = a.manualControls, m.controlNav.active(), a.controlNav.bind(r, function(e) {
                        if (e.preventDefault(), "" === o || o === e.type) {
                            var t = $(this),
                                i = a.controlNav.index(t);
                            t.hasClass(n + "active") || (a.direction = i > a.currentSlide ? "next" : "prev", a.flexAnimate(i, a.vars.pauseOnAction))
                        }
                        "" === o && (o = e.type), m.setToClearWatchedEvent()
                    })
                },
                set: function() {
                    var e = "thumbnails" === a.vars.controlNav ? "img" : "a";
                    a.controlNav = $("." + n + "control-nav li " + e, a.controlsContainer ? a.controlsContainer : a)
                },
                active: function() {
                    a.controlNav.removeClass(n + "active").eq(a.animatingTo).addClass(n + "active")
                },
                update: function(e, t) {
                    a.pagingCount > 1 && "add" === e ? a.controlNavScaffold.append($("<li><a>" + a.count + "</a></li>")) : 1 === a.pagingCount ? a.controlNavScaffold.find("li").remove() : a.controlNav.eq(t).closest("li").remove(), m.controlNav.set(), a.pagingCount > 1 && a.pagingCount !== a.controlNav.length ? a.update(t, e) : m.controlNav.active()
                }
            },
            directionNav: {
                setup: function() {
                    var e = $('<ul class="' + n + 'direction-nav"><li class="' + n + 'nav-prev"><a class="' + n + 'prev ss-icon" href="#">' + a.vars.prevText + '</a></li><li class="' + n + 'nav-next ss-icon"><a class="' + n + 'next" href="#">' + a.vars.nextText + "</a></li></ul>");
                    a.customDirectionNav ? a.directionNav = a.customDirectionNav : a.controlsContainer ? ($(a.controlsContainer).append(e), a.directionNav = $("." + n + "direction-nav li a", a.controlsContainer)) : (a.append(e), a.directionNav = $("." + n + "direction-nav li a", a)), m.directionNav.update(), a.directionNav.bind(r, function(e) {
                        e.preventDefault();
                        var t;
                        ("" === o || o === e.type) && (t = a.getTarget($(this).hasClass(n + "next") ? "next" : "prev"), a.flexAnimate(t, a.vars.pauseOnAction)), "" === o && (o = e.type), m.setToClearWatchedEvent()
                    })
                },
                update: function() {
                    var e = n + "disabled";
                    1 === a.pagingCount ? a.directionNav.addClass(e).attr("tabindex", "-1") : a.vars.animationLoop ? a.directionNav.removeClass(e).removeAttr("tabindex") : 0 === a.animatingTo ? a.directionNav.removeClass(e).filter("." + n + "prev").addClass(e).attr("tabindex", "-1") : a.animatingTo === a.last ? a.directionNav.removeClass(e).filter("." + n + "next").addClass(e).attr("tabindex", "-1") : a.directionNav.removeClass(e).removeAttr("tabindex")
                }
            },
            pausePlay: {
                setup: function() {
                    var e = $('<div class="' + n + 'pauseplay"><a></a></div>');
                    a.controlsContainer ? (a.controlsContainer.append(e), a.pausePlay = $("." + n + "pauseplay a", a.controlsContainer)) : (a.append(e), a.pausePlay = $("." + n + "pauseplay a", a)), m.pausePlay.update(a.vars.slideshow ? n + "pause" : n + "play"), a.pausePlay.bind(r, function(e) {
                        e.preventDefault(), ("" === o || o === e.type) && ($(this).hasClass(n + "pause") ? (a.manualPause = !0, a.manualPlay = !1, a.pause()) : (a.manualPause = !1, a.manualPlay = !0, a.play())), "" === o && (o = e.type), m.setToClearWatchedEvent()
                    })
                },
                update: function(e) {
                    "play" === e ? a.pausePlay.removeClass(n + "pause").addClass(n + "play").html(a.vars.playText) : a.pausePlay.removeClass(n + "play").addClass(n + "pause").html(a.vars.pauseText)
                }
            },
            touch: function() {
                function t(t) {
                    t.stopPropagation(), a.animating ? t.preventDefault() : (a.pause(), e._gesture.addPointer(t.pointerId), w = 0, p = c ? a.h : a.w, f = Number(new Date), l = u && d && a.animatingTo === a.last ? 0 : u && d ? a.limit - (a.itemW + a.vars.itemMargin) * a.move * a.animatingTo : u && a.currentSlide === a.last ? a.limit : u ? (a.itemW + a.vars.itemMargin) * a.move * a.currentSlide : d ? (a.last - a.currentSlide + a.cloneOffset) * p : (a.currentSlide + a.cloneOffset) * p)
                }

                function n(t) {
                    t.stopPropagation();
                    var a = t.target._slider;
                    if (a) {
                        var n = -t.translationX,
                            i = -t.translationY;
                        return w += c ? i : n, m = w, y = c ? Math.abs(w) < Math.abs(-n) : Math.abs(w) < Math.abs(-i), t.detail === t.MSGESTURE_FLAG_INERTIA ? void setImmediate(function() {
                            e._gesture.stop()
                        }) : void((!y || Number(new Date) - f > 500) && (t.preventDefault(), !v && a.transitions && (a.vars.animationLoop || (m = w / (0 === a.currentSlide && 0 > w || a.currentSlide === a.last && w > 0 ? Math.abs(w) / p + 2 : 1)), a.setProps(l + m, "setTouch"))))
                    }
                }

                function s(e) {
                    e.stopPropagation();
                    var t = e.target._slider;
                    if (t) {
                        if (t.animatingTo === t.currentSlide && !y && null !== m) {
                            var a = d ? -m : m,
                                n = t.getTarget(a > 0 ? "next" : "prev");
                            t.canAdvance(n) && (Number(new Date) - f < 550 && Math.abs(a) > 50 || Math.abs(a) > p / 2) ? t.flexAnimate(n, t.vars.pauseOnAction) : v || t.flexAnimate(t.currentSlide, t.vars.pauseOnAction, !0)
                        }
                        r = null, o = null, m = null, l = null, w = 0
                    }
                }
                var r, o, l, p, m, f, g, h, S, y = !1,
                    x = 0,
                    b = 0,
                    w = 0;
                i ? (e.style.msTouchAction = "none", e._gesture = new MSGesture, e._gesture.target = e, e.addEventListener("MSPointerDown", t, !1), e._slider = a, e.addEventListener("MSGestureChange", n, !1), e.addEventListener("MSGestureEnd", s, !1)) : (g = function(t) {
                    a.animating ? t.preventDefault() : (window.navigator.msPointerEnabled || 1 === t.touches.length) && (a.pause(), p = c ? a.h : a.w, f = Number(new Date), x = t.touches[0].pageX, b = t.touches[0].pageY, l = u && d && a.animatingTo === a.last ? 0 : u && d ? a.limit - (a.itemW + a.vars.itemMargin) * a.move * a.animatingTo : u && a.currentSlide === a.last ? a.limit : u ? (a.itemW + a.vars.itemMargin) * a.move * a.currentSlide : d ? (a.last - a.currentSlide + a.cloneOffset) * p : (a.currentSlide + a.cloneOffset) * p, r = c ? b : x, o = c ? x : b, e.addEventListener("touchmove", h, !1), e.addEventListener("touchend", S, !1))
                }, h = function(e) {
                    x = e.touches[0].pageX, b = e.touches[0].pageY, m = c ? r - b : r - x, y = c ? Math.abs(m) < Math.abs(x - o) : Math.abs(m) < Math.abs(b - o);
                    var t = 500;
                    (!y || Number(new Date) - f > t) && (e.preventDefault(), !v && a.transitions && (a.vars.animationLoop || (m /= 0 === a.currentSlide && 0 > m || a.currentSlide === a.last && m > 0 ? Math.abs(m) / p + 2 : 1), a.setProps(l + m, "setTouch")))
                }, S = function(t) {
                    if (e.removeEventListener("touchmove", h, !1), a.animatingTo === a.currentSlide && !y && null !== m) {
                        var n = d ? -m : m,
                            i = a.getTarget(n > 0 ? "next" : "prev");
                        a.canAdvance(i) && (Number(new Date) - f < 550 && Math.abs(n) > 50 || Math.abs(n) > p / 2) ? a.flexAnimate(i, a.vars.pauseOnAction) : v || a.flexAnimate(a.currentSlide, a.vars.pauseOnAction, !0)
                    }
                    e.removeEventListener("touchend", S, !1), r = null, o = null, m = null, l = null
                }, e.addEventListener("touchstart", g, !1))
            },
            resize: function() {
                !a.animating && a.is(":visible") && (u || a.doMath(), v ? m.smoothHeight() : u ? (a.slides.width(a.computedW), a.update(a.pagingCount), a.setProps()) : c ? (a.viewport.height(a.h), a.setProps(a.h, "setTotal")) : (a.vars.smoothHeight && m.smoothHeight(), a.newSlides.width(a.computedW), a.setProps(a.computedW, "setTotal")))
            },
            smoothHeight: function(e) {
                if (!c || v) {
                    var t = v ? a : a.viewport;
                    e ? t.animate({
                        height: a.slides.eq(a.animatingTo).height()
                    }, e) : t.height(a.slides.eq(a.animatingTo).height())
                }
            },
            sync: function(e) {
                var t = $(a.vars.sync).data("flexslider"),
                    n = a.animatingTo;
                switch (e) {
                    case "animate":
                        t.flexAnimate(n, a.vars.pauseOnAction, !1, !0);
                        break;
                    case "play":
                        t.playing || t.asNav || t.play();
                        break;
                    case "pause":
                        t.pause()
                }
            },
            uniqueID: function(e) {
                return e.filter("[id]").add(e.find("[id]")).each(function() {
                    var e = $(this);
                    e.attr("id", e.attr("id") + "_clone")
                }), e
            },
            pauseInvisible: {
                visProp: null,
                init: function() {
                    var e = m.pauseInvisible.getHiddenProp();
                    if (e) {
                        var t = e.replace(/[H|h]idden/, "") + "visibilitychange";
                        document.addEventListener(t, function() {
                            m.pauseInvisible.isHidden() ? a.startTimeout ? clearTimeout(a.startTimeout) : a.pause() : a.started ? a.play() : a.vars.initDelay > 0 ? setTimeout(a.play, a.vars.initDelay) : a.play()
                        })
                    }
                },
                isHidden: function() {
                    var e = m.pauseInvisible.getHiddenProp();
                    return e ? document[e] : !1
                },
                getHiddenProp: function() {
                    var e = ["webkit", "moz", "ms", "o"];
                    if ("hidden" in document) return "hidden";
                    for (var t = 0; t < e.length; t++)
                        if (e[t] + "Hidden" in document) return e[t] + "Hidden";
                    return null
                }
            },
            setToClearWatchedEvent: function() {
                clearTimeout(l), l = setTimeout(function() {
                    o = ""
                }, 3e3)
            }
        }, a.flexAnimate = function(e, t, i, r, o) {
            if (a.vars.animationLoop || e === a.currentSlide || (a.direction = e > a.currentSlide ? "next" : "prev"), p && 1 === a.pagingCount && (a.direction = a.currentItem < e ? "next" : "prev"), !a.animating && (a.canAdvance(e, o) || i) && a.is(":visible")) {
                if (p && r) {
                    var l = $(a.vars.asNavFor).data("flexslider");
                    if (a.atEnd = 0 === e || e === a.count - 1, l.flexAnimate(e, !0, !1, !0, o), a.direction = a.currentItem < e ? "next" : "prev", l.direction = a.direction, Math.ceil((e + 1) / a.visible) - 1 === a.currentSlide || 0 === e) return a.currentItem = e, a.slides.removeClass(n + "active-slide").eq(e).addClass(n + "active-slide"), !1;
                    a.currentItem = e, a.slides.removeClass(n + "active-slide").eq(e).addClass(n + "active-slide"), e = Math.floor(e / a.visible)
                }
                if (a.animating = !0, a.animatingTo = e, t && a.pause(), a.vars.before(a), a.syncExists && !o && m.sync("animate"), a.vars.controlNav && m.controlNav.active(), u || a.slides.removeClass(n + "active-slide").eq(e).addClass(n + "active-slide"), a.atEnd = 0 === e || e === a.last, a.vars.directionNav && m.directionNav.update(), e === a.last && (a.vars.end(a), a.vars.animationLoop || a.pause()), v) s ? (a.slides.eq(a.currentSlide).css({
                    opacity: 0,
                    zIndex: 1
                }), a.slides.eq(e).css({
                    opacity: 1,
                    zIndex: 2
                }), a.wrapup(f)) : (a.slides.eq(a.currentSlide).css({
                    zIndex: 1
                }).animate({
                    opacity: 0
                }, a.vars.animationSpeed, a.vars.easing), a.slides.eq(e).css({
                    zIndex: 2
                }).animate({
                    opacity: 1
                }, a.vars.animationSpeed, a.vars.easing, a.wrapup));
                else {
                    var f = c ? a.slides.filter(":first").height() : a.computedW,
                        g, h, S;
                    u ? (g = a.vars.itemMargin, S = (a.itemW + g) * a.move * a.animatingTo, h = S > a.limit && 1 !== a.visible ? a.limit : S) : h = 0 === a.currentSlide && e === a.count - 1 && a.vars.animationLoop && "next" !== a.direction ? d ? (a.count + a.cloneOffset) * f : 0 : a.currentSlide === a.last && 0 === e && a.vars.animationLoop && "prev" !== a.direction ? d ? 0 : (a.count + 1) * f : d ? (a.count - 1 - e + a.cloneOffset) * f : (e + a.cloneOffset) * f, a.setProps(h, "", a.vars.animationSpeed), a.transitions ? (a.vars.animationLoop && a.atEnd || (a.animating = !1, a.currentSlide = a.animatingTo), a.container.unbind("webkitTransitionEnd transitionend"), a.container.bind("webkitTransitionEnd transitionend", function() {
                        clearTimeout(a.ensureAnimationEnd), a.wrapup(f)
                    }), clearTimeout(a.ensureAnimationEnd), a.ensureAnimationEnd = setTimeout(function() {
                        a.wrapup(f)
                    }, a.vars.animationSpeed + 100)) : a.container.animate(a.args, a.vars.animationSpeed, a.vars.easing, function() {
                        a.wrapup(f)
                    })
                }
                a.vars.smoothHeight && m.smoothHeight(a.vars.animationSpeed)
            }
        }, a.wrapup = function(e) {
            v || u || (0 === a.currentSlide && a.animatingTo === a.last && a.vars.animationLoop ? a.setProps(e, "jumpEnd") : a.currentSlide === a.last && 0 === a.animatingTo && a.vars.animationLoop && a.setProps(e, "jumpStart")), a.animating = !1, a.currentSlide = a.animatingTo, a.vars.after(a)
        }, a.animateSlides = function() {
            !a.animating && f && a.flexAnimate(a.getTarget("next"))
        }, a.pause = function() {
            clearInterval(a.animatedSlides), a.animatedSlides = null, a.playing = !1, a.vars.pausePlay && m.pausePlay.update("play"), a.syncExists && m.sync("pause")
        }, a.play = function() {
            a.playing && clearInterval(a.animatedSlides), a.animatedSlides = a.animatedSlides || setInterval(a.animateSlides, a.vars.slideshowSpeed), a.started = a.playing = !0, a.vars.pausePlay && m.pausePlay.update("pause"), a.syncExists && m.sync("play")
        }, a.stop = function() {
            a.pause(), a.stopped = !0
        }, a.canAdvance = function(e, t) {
            var n = p ? a.pagingCount - 1 : a.last;
            return t ? !0 : p && a.currentItem === a.count - 1 && 0 === e && "prev" === a.direction ? !0 : p && 0 === a.currentItem && e === a.pagingCount - 1 && "next" !== a.direction ? !1 : e !== a.currentSlide || p ? a.vars.animationLoop ? !0 : a.atEnd && 0 === a.currentSlide && e === n && "next" !== a.direction ? !1 : a.atEnd && a.currentSlide === n && 0 === e && "next" === a.direction ? !1 : !0 : !1
        }, a.getTarget = function(e) {
            return a.direction = e, "next" === e ? a.currentSlide === a.last ? 0 : a.currentSlide + 1 : 0 === a.currentSlide ? a.last : a.currentSlide - 1
        }, a.setProps = function(e, t, n) {
            var i = function() {
                var n = e ? e : (a.itemW + a.vars.itemMargin) * a.move * a.animatingTo,
                    i = function() {
                        if (u) return "setTouch" === t ? e : d && a.animatingTo === a.last ? 0 : d ? a.limit - (a.itemW + a.vars.itemMargin) * a.move * a.animatingTo : a.animatingTo === a.last ? a.limit : n;
                        switch (t) {
                            case "setTotal":
                                return d ? (a.count - 1 - a.currentSlide + a.cloneOffset) * e : (a.currentSlide + a.cloneOffset) * e;
                            case "setTouch":
                                return d ? e : e;
                            case "jumpEnd":
                                return d ? e : a.count * e;
                            case "jumpStart":
                                return d ? a.count * e : e;
                            default:
                                return e
                        }
                    }();
                return -1 * i + "px"
            }();
            a.transitions && (i = c ? "translate3d(0," + i + ",0)" : "translate3d(" + i + ",0,0)", n = void 0 !== n ? n / 1e3 + "s" : "0s", a.container.css("-" + a.pfx + "-transition-duration", n), a.container.css("transition-duration", n)), a.args[a.prop] = i, (a.transitions || void 0 === n) && a.container.css(a.args), a.container.css("transform", i)
        }, a.setup = function(e) {
            if (v) a.slides.css({
                width: "100%",
                "float": "left",
                marginRight: "-100%",
                position: "relative"
            }), "init" === e && (s ? a.slides.css({
                opacity: 0,
                display: "block",
                webkitTransition: "opacity " + a.vars.animationSpeed / 1e3 + "s ease",
                zIndex: 1
            }).eq(a.currentSlide).css({
                opacity: 1,
                zIndex: 2
            }) : 0 == a.vars.fadeFirstSlide ? a.slides.css({
                opacity: 0,
                display: "block",
                zIndex: 1
            }).eq(a.currentSlide).css({
                zIndex: 2
            }).css({
                opacity: 1
            }) : a.slides.css({
                opacity: 0,
                display: "block",
                zIndex: 1
            }).eq(a.currentSlide).css({
                zIndex: 2
            }).animate({
                opacity: 1
            }, a.vars.animationSpeed, a.vars.easing)), a.vars.smoothHeight && m.smoothHeight();
            else {
                var t, i;
                "init" === e && (a.viewport = $('<div class="' + n + 'viewport"></div>').css({
                    overflow: "hidden",
                    position: "relative"
                }).appendTo(a).append(a.container), a.cloneCount = 0, a.cloneOffset = 0, d && (i = $.makeArray(a.slides).reverse(), a.slides = $(i), a.container.empty().append(a.slides))), a.vars.animationLoop && !u && (a.cloneCount = 2, a.cloneOffset = 1, "init" !== e && a.container.find(".clone").remove(), a.container.append(m.uniqueID(a.slides.first().clone().addClass("clone")).attr("aria-hidden", "true")).prepend(m.uniqueID(a.slides.last().clone().addClass("clone")).attr("aria-hidden", "true"))), a.newSlides = $(a.vars.selector, a), t = d ? a.count - 1 - a.currentSlide + a.cloneOffset : a.currentSlide + a.cloneOffset, c && !u ? (a.container.height(200 * (a.count + a.cloneCount) + "%").css("position", "absolute").width("100%"), setTimeout(function() {
                    a.newSlides.css({
                        display: "block"
                    }), a.doMath(), a.viewport.height(a.h), a.setProps(t * a.h, "init")
                }, "init" === e ? 100 : 0)) : (a.container.width(200 * (a.count + a.cloneCount) + "%"), a.setProps(t * a.computedW, "init"), setTimeout(function() {
                    a.doMath(), a.newSlides.css({
                        width: a.computedW,
                        "float": "left",
                        display: "block"
                    }), a.vars.smoothHeight && m.smoothHeight()
                }, "init" === e ? 100 : 0))
            }
            u || a.slides.removeClass(n + "active-slide").eq(a.currentSlide).addClass(n + "active-slide"), a.vars.init(a)
        }, a.doMath = function() {
            var e = a.slides.first(),
                t = a.vars.itemMargin,
                n = a.vars.minItems,
                i = a.vars.maxItems;
            a.w = void 0 === a.viewport ? a.width() : a.viewport.width(), a.h = e.height(), a.boxPadding = e.outerWidth() - e.width(), u ? (a.itemT = a.vars.itemWidth + t, a.minW = n ? n * a.itemT : a.w, a.maxW = i ? i * a.itemT - t : a.w, a.itemW = a.minW > a.w ? (a.w - t * (n - 1)) / n : a.maxW < a.w ? (a.w - t * (i - 1)) / i : a.vars.itemWidth > a.w ? a.w : a.vars.itemWidth, a.visible = Math.floor(a.w / a.itemW), a.move = a.vars.move > 0 && a.vars.move < a.visible ? a.vars.move : a.visible, a.pagingCount = Math.ceil((a.count - a.visible) / a.move + 1), a.last = a.pagingCount - 1, a.limit = 1 === a.pagingCount ? 0 : a.vars.itemWidth > a.w ? a.itemW * (a.count - 1) + t * (a.count - 1) : (a.itemW + t) * a.count - a.w - t) : (a.itemW = a.w, a.pagingCount = a.count, a.last = a.count - 1), a.computedW = a.itemW - a.boxPadding
        }, a.update = function(e, t) {
            a.doMath(), u || (e < a.currentSlide ? a.currentSlide += 1 : e <= a.currentSlide && 0 !== e && (a.currentSlide -= 1), a.animatingTo = a.currentSlide), a.vars.controlNav && !a.manualControls && ("add" === t && !u || a.pagingCount > a.controlNav.length ? m.controlNav.update("add") : ("remove" === t && !u || a.pagingCount < a.controlNav.length) && (u && a.currentSlide > a.last && (a.currentSlide -= 1, a.animatingTo -= 1), m.controlNav.update("remove", a.last))), a.vars.directionNav && m.directionNav.update()
        }, a.addSlide = function(e, t) {
            var n = $(e);
            a.count += 1, a.last = a.count - 1, c && d ? void 0 !== t ? a.slides.eq(a.count - t).after(n) : a.container.prepend(n) : void 0 !== t ? a.slides.eq(t).before(n) : a.container.append(n), a.update(t, "add"), a.slides = $(a.vars.selector + ":not(.clone)", a), a.setup(), a.vars.added(a)
        }, a.removeSlide = function(e) {
            var t = isNaN(e) ? a.slides.index($(e)) : e;
            a.count -= 1, a.last = a.count - 1, isNaN(e) ? $(e, a.slides).remove() : c && d ? a.slides.eq(a.last).remove() : a.slides.eq(e).remove(), a.doMath(), a.update(t, "remove"), a.slides = $(a.vars.selector + ":not(.clone)", a), a.setup(), a.vars.removed(a)
        }, m.init()
    }, $(window).blur(function(e) {
        focused = !1
    }).focus(function(e) {
        focused = !0
    }), $.flexslider.defaults = {
        namespace: "flex-",
        selector: ".slides > li",
        animation: "fade",
        easing: "swing",
        direction: "horizontal",
        reverse: !1,
        animationLoop: !0,
        smoothHeight: !1,
        startAt: 0,
        slideshow: !0,
        slideshowSpeed: 7e3,
        animationSpeed: 600,
        initDelay: 0,
        randomize: !1,
        fadeFirstSlide: !0,
        thumbCaptions: !1,
        pauseOnAction: !0,
        pauseOnHover: !1,
        pauseInvisible: !0,
        useCSS: !0,
        touch: !0,
        video: !1,
        controlNav: !0,
        directionNav: !0,
        prevText: "&#x25C5;",
        nextText: "&#x25BB;",
        keyboard: !0,
        multipleKeyboard: !1,
        mousewheel: !1,
        pausePlay: !1,
        pauseText: "Pause",
        playText: "Play",
        controlsContainer: "",
        manualControls: "",
        customDirectionNav: "",
        sync: "",
        asNavFor: "",
        itemWidth: 0,
        itemMargin: 0,
        minItems: 1,
        maxItems: 0,
        move: 0,
        allowOneSlide: !0,
        start: function() {},
        before: function() {},
        after: function() {},
        end: function() {},
        added: function() {},
        removed: function() {},
        init: function() {}
    }, $.fn.flexslider = function(e) {
        if (void 0 === e && (e = {}), "object" == typeof e) return this.each(function() {
            var t = $(this),
                a = e.selector ? e.selector : ".slides > li",
                n = t.find(a);
            1 === n.length && e.allowOneSlide === !0 || 0 === n.length ? (n.fadeIn(400), e.start && e.start(t)) : void 0 === t.data("flexslider") && new $.flexslider(this, e)
        });
        var t = $(this).data("flexslider");
        switch (e) {
            case "play":
                t.play();
                break;
            case "pause":
                t.pause();
                break;
            case "stop":
                t.stop();
                break;
            case "next":
                t.flexAnimate(t.getTarget("next"), !0);
                break;
            case "prev":
            case "previous":
                t.flexAnimate(t.getTarget("prev"), !0);
                break;
            default:
                "number" == typeof e && t.flexAnimate(e, !0)
        }
    }
}(jQuery);



/*
 * jQuery mmenu v4.3.6
 * @requires jQuery 1.7.0 or later
 *
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 *
 * Dual licensed under the MIT license:
 * http://en.wikipedia.org/wiki/MIT_License
 */
! function(e) {
    function n(n, s, t) {
        if (t) {
            if ("object" != typeof n && (n = {}), "boolean" != typeof n.isMenu) {
                var o = t.children();
                n.isMenu = 1 == o.length && o.is(s.panelNodetype)
            }
            return n
        }
        n = e.extend(!0, {}, e[i].defaults, n), ("top" == n.position || "bottom" == n.position) && ("back" == n.zposition || "next" == n.zposition) && (e[i].deprecated('Using position "' + n.position + '" in combination with zposition "' + n.zposition + '"', 'zposition "front"'), n.zposition = "front");
        for (var a = ["position", "zposition", "modal", "moveBackground"], l = 0, d = a.length; d > l; l++) "undefined" != typeof n[a[l]] && (e[i].deprecated('The option "' + a[l] + '"', "offCanvas." + a[l]), n.offCanvas = n.offCanvas || {}, n.offCanvas[a[l]] = n[a[l]]);
        return n
    }

    function s(n) {
        n = e.extend(!0, {}, e[i].configuration, n);
        for (var s = ["panel", "list", "selected", "label", "spacer"], t = 0, o = s.length; o > t; t++) "undefined" != typeof n[s[t] + "Class"] && (e[i].deprecated('The configuration option "' + s[t] + 'Class"', "classNames." + s[t]), n.classNames[s[t]] = n[s[t] + "Class"]);
        if ("undefined" != typeof n.counterClass && (e[i].deprecated('The configuration option "counterClass"', "classNames.counters.counter"), n.classNames.counters = n.classNames.counters || {}, n.classNames.counters.counter = n.counterClass), "undefined" != typeof n.collapsedClass && (e[i].deprecated('The configuration option "collapsedClass"', "classNames.labels.collapsed"), n.classNames.labels = n.classNames.labels || {}, n.classNames.labels.collapsed = n.collapsedClass), "undefined" != typeof n.header)
            for (var s = ["panelHeader", "panelNext", "panelPrev"], t = 0, o = s.length; o > t; t++) "undefined" != typeof n.header[s[t] + "Class"] && (e[i].deprecated('The configuration option "header.' + s[t] + 'Class"', "classNames.header." + s[t]), n.classNames.header = n.classNames.header || {}, n.classNames.header[s[t]] = n.header[s[t] + "Class"]);
        for (var s = ["pageNodetype", "pageSelector", "menuWrapperSelector", "menuInjectMethod"], t = 0, o = s.length; o > t; t++) "undefined" != typeof n[s[t]] && (e[i].deprecated('The configuration option "' + s[t] + '"', "offCanvas." + s[t]), n.offCanvas = n.offCanvas || {}, n.offCanvas[s[t]] = n[s[t]]);
        return n
    }

    function t() {
        r = !0, u.$wndw = e(window), u.$html = e("html"), u.$body = e("body"), e.each([a, l, d], function(e, n) {
            n.add = function(e) {
                e = e.split(" ");
                for (var s in e) n[e[s]] = n.mm(e[s])
            }
        }), a.mm = function(e) {
            return "mm-" + e
        }, a.add("wrapper menu ismenu inline panel list subtitle selected label spacer current highest hidden opened subopened subopen fullsubopen subclose"), a.umm = function(e) {
            return "mm-" == e.slice(0, 3) && (e = e.slice(3)), e
        }, l.mm = function(e) {
            return "mm-" + e
        }, l.add("parent"), d.mm = function(e) {
            return e + ".mm"
        }, d.add("toggle open close setSelected transitionend webkitTransitionEnd mousedown mouseup touchstart touchmove touchend scroll resize click keydown keyup"), e[i]._c = a, e[i]._d = l, e[i]._e = d, e[i].glbl = u
    }
    var i = "mmenu",
        o = "4.3.6";
    if (!e[i]) {
        var a = {},
            l = {},
            d = {},
            r = !1,
            u = {
                $wndw: null,
                $html: null,
                $body: null
            };
        e[i] = function(e, n, s) {
                return this.$menu = e, this.opts = n, this.conf = s, this.vars = {}, this._init(), this
            }, e[i].uniqueId = 0, e[i].prototype = {
                _init: function() {
                    if (this.opts = n(this.opts, this.conf, this.$menu), this._initMenu(), this._initPanels(), this._initLinks(), this._bindCustomEvents(), e[i].addons)
                        for (var s = 0; s < e[i].addons.length; s++) "function" == typeof this["_addon_" + e[i].addons[s]] && this["_addon_" + e[i].addons[s]]()
                },
                _bindCustomEvents: function() {
                    var n = this,
                        s = this.$menu.find(this.opts.isMenu && !this.opts.slidingSubmenus ? "ul, ol" : "." + a.panel);
                    s.off(d.toggle + " " + d.open + " " + d.close).on(d.toggle + " " + d.open + " " + d.close, function(e) {
                        e.stopPropagation()
                    }), this.opts.slidingSubmenus ? s.on(d.open, function() {
                        return n._openSubmenuHorizontal(e(this))
                    }) : s.on(d.toggle, function() {
                        var n = e(this);
                        return n.triggerHandler(n.parent().hasClass(a.opened) ? d.close : d.open)
                    }).on(d.open, function() {
                        return e(this).parent().addClass(a.opened), "open"
                    }).on(d.close, function() {
                        return e(this).parent().removeClass(a.opened), "close"
                    })
                },
                _initMenu: function() {
                    this.opts.offCanvas && this.conf.clone && (this.$menu = this.$menu.clone(!0), this.$menu.add(this.$menu.find("*")).filter("[id]").each(function() {
                        e(this).attr("id", a.mm(e(this).attr("id")))
                    })), this.$menu.contents().each(function() {
                        3 == e(this)[0].nodeType && e(this).remove()
                    }), this.$menu.parent().addClass(a.wrapper);
                    var n = [a.menu];
                    n.push(a.mm(this.opts.slidingSubmenus ? "horizontal" : "vertical")), this.opts.classes && n.push(this.opts.classes), this.opts.isMenu && n.push(a.ismenu), this.$menu.addClass(n.join(" "))
                },
                _initPanels: function() {
                    var n = this;
                    this.__refactorClass(e("." + this.conf.classNames.list, this.$menu), this.conf.classNames.list, "list"), this.opts.isMenu && e("ul, ol", this.$menu).not(".mm-nolist").addClass(a.list);
                    var s = e("." + a.list + " > li", this.$menu);
                    this.__refactorClass(s, this.conf.classNames.selected, "selected"), this.__refactorClass(s, this.conf.classNames.label, "label"), this.__refactorClass(s, this.conf.classNames.spacer, "spacer"), s.off(d.setSelected).on(d.setSelected, function(n, t) {
                        n.stopPropagation(), s.removeClass(a.selected), "boolean" != typeof t && (t = !0), t && e(this).addClass(a.selected)
                    }), this.__refactorClass(e("." + this.conf.classNames.panel, this.$menu), this.conf.classNames.panel, "panel"), this.$menu.children().filter(this.conf.panelNodetype).add(this.$menu.find("." + a.list).children().children().filter(this.conf.panelNodetype)).addClass(a.panel);
                    var t = e("." + a.panel, this.$menu);
                    t.each(function() {
                        var s = e(this),
                            t = s.attr("id") || n.__getUniqueId();
                        s.attr("id", t)
                    }), t.find("." + a.panel).each(function() {
                        var s = e(this),
                            t = s.is("ul, ol") ? s : s.find("ul ,ol").first(),
                            i = s.parent(),
                            o = i.find("> a, > span"),
                            d = i.closest("." + a.panel);
                        if (s.data(l.parent, i), i.parent().is("." + a.list)) {
                            var r = e('<a class="' + a.subopen + '" href="#' + s.attr("id") + '" />').insertBefore(o);
                            o.is("a") || r.addClass(a.fullsubopen), n.opts.slidingSubmenus && t.prepend('<li class="' + a.subtitle + '"><a class="' + a.subclose + '" href="#' + d.attr("id") + '">' + o.text() + "</a></li>")
                        }
                    });
                    var i = this.opts.slidingSubmenus ? d.open : d.toggle;
                    if (t.each(function() {
                            var s = e(this),
                                t = s.attr("id");
                            e('a[href="#' + t + '"]', n.$menu).off(d.click).on(d.click, function(e) {
                                e.preventDefault(), s.trigger(i)
                            })
                        }), this.opts.slidingSubmenus) {
                        var o = e("." + a.list + " > li." + a.selected, this.$menu);
                        o.parents("li").removeClass(a.selected).end().add(o.parents("li")).each(function() {
                            var n = e(this),
                                s = n.find("> ." + a.panel);
                            s.length && (n.parents("." + a.panel).addClass(a.subopened), s.addClass(a.opened))
                        }).closest("." + a.panel).addClass(a.opened).parents("." + a.panel).addClass(a.subopened)
                    } else {
                        var o = e("li." + a.selected, this.$menu);
                        o.parents("li").removeClass(a.selected).end().add(o.parents("li")).addClass(a.opened)
                    }
                    var r = t.filter("." + a.opened);
                    r.length || (r = t.first()), r.addClass(a.opened).last().addClass(a.current), this.opts.slidingSubmenus && t.not(r.last()).addClass(a.hidden).end().find("." + a.panel).appendTo(this.$menu)
                },
                _initLinks: function() {
                    var n = this;
                    e("." + a.list + " > li > a", this.$menu).not("." + a.subopen).not("." + a.subclose).not('[rel="external"]').not('[target="_blank"]').off(d.click).on(d.click, function(s) {
                        var t = e(this),
                            i = t.attr("href") || "";
                        n.__valueOrFn(n.opts.onClick.setSelected, t) && t.parent().trigger(d.setSelected);
                        var o = n.__valueOrFn(n.opts.onClick.preventDefault, t, "#" == i.slice(0, 1));
                        o && s.preventDefault(), n.__valueOrFn(n.opts.onClick.blockUI, t, !o) && u.$html.addClass(a.blocking), n.__valueOrFn(n.opts.onClick.close, t, o) && n.$menu.triggerHandler(d.close)
                    })
                },
                _openSubmenuHorizontal: function(n) {
                    if (n.hasClass(a.current)) return !1;
                    var s = e("." + a.panel, this.$menu),
                        t = s.filter("." + a.current);
                    return s.removeClass(a.highest).removeClass(a.current).not(n).not(t).addClass(a.hidden), n.hasClass(a.opened) ? t.addClass(a.highest).removeClass(a.opened).removeClass(a.subopened) : (n.addClass(a.highest), t.addClass(a.subopened)), n.removeClass(a.hidden).addClass(a.current), setTimeout(function() {
                        n.removeClass(a.subopened).addClass(a.opened)
                    }, this.conf.openingInterval), "open"
                },
                _update: function(e) {
                    if (this.updates || (this.updates = []), "function" == typeof e) this.updates.push(e);
                    else
                        for (var n = 0, s = this.updates.length; s > n; n++) this.updates[n].call(this, e)
                },
                __valueOrFn: function(e, n, s) {
                    return "function" == typeof e ? e.call(n[0]) : "undefined" == typeof e && "undefined" != typeof s ? s : e
                },
                __refactorClass: function(e, n, s) {
                    e.filter("." + n).removeClass(n).addClass(a[s])
                },
                __transitionend: function(e, n, s) {
                    var t = !1,
                        i = function() {
                            t || n.call(e[0]), t = !0
                        };
                    e.one(d.transitionend, i), e.one(d.webkitTransitionEnd, i), setTimeout(i, 1.1 * s)
                },
                __getUniqueId: function() {
                    return a.mm(e[i].uniqueId++)
                }
            }, e.fn[i] = function(o, a) {
                return r || t(), o = n(o, a), a = s(a), this.each(function() {
                    var n = e(this);
                    n.data(i) || n.data(i, new e[i](n, o, a))
                })
            }, e[i].version = o, e[i].defaults = {
                classes: "",
                slidingSubmenus: !0,
                onClick: {
                    setSelected: !0
                }
            }, e[i].configuration = {
                panelNodetype: "ul, ol, div",
                transitionDuration: 400,
                openingInterval: 25,
                classNames: {
                    panel: "Panle",
                    list: "List",
                    selected: "Selected",
                    label: "Label",
                    spacer: "Spacer"
                }
            },
            function() {
                var n = window.document,
                    s = window.navigator.userAgent,
                    t = "ontouchstart" in n,
                    o = "WebkitOverflowScrolling" in n.documentElement.style,
                    a = function() {
                        return s.indexOf("Android") >= 0 ? 2.4 > parseFloat(s.slice(s.indexOf("Android") + 8)) : !1
                    }();
                e[i].support = {
                    touch: t,
                    oldAndroidBrowser: a,
                    overflowscrolling: function() {
                        return t ? o ? !0 : a ? !1 : !0 : !0
                    }()
                }
            }(), e[i].debug = function() {}, e[i].deprecated = function(e, n) {
                "undefined" != typeof console && "undefined" != typeof console.warn && console.warn("MMENU: " + e + " is deprecated, use " + n + " instead.")
            }
    }
}(jQuery);
/*
 * jQuery mmenu offCanvas addon
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 */
! function(e) {
    function o(e) {
        return e
    }

    function t(e) {
        return "string" != typeof e.pageSelector && (e.pageSelector = "> " + e.pageNodetype), e
    }

    function n() {
        d = !0, s = e[r]._c, i = e[r]._d, a = e[r]._e, s.add("offcanvas modal background opening blocker page"), i.add("style"), a.add("opening opened closing closed setPage"), p = e[r].glbl, p.$allMenus = (p.$allMenus || e()).add(this.$menu), p.$wndw.on(a.keydown, function(e) {
            return p.$html.hasClass(s.opened) && 9 == e.keyCode ? (e.preventDefault(), !1) : void 0
        });
        var o = 0;
        p.$wndw.on(a.resize, function(e, t) {
            if (t || p.$html.hasClass(s.opened)) {
                var n = p.$wndw.height();
                (t || n != o) && (o = n, p.$page.css("minHeight", n))
            }
        })
    }
    var s, i, a, p, r = "mmenu",
        l = "offCanvas",
        d = !1;
    e[r].prototype["_addon_" + l] = function() {
        if (!this.opts[l]) return this;
        d || n(), this.opts[l] = o(this.opts[l]), this.conf[l] = t(this.conf[l]), "boolean" != typeof this.vars.opened && (this.vars.opened = !1);
        var e = this.opts[l],
            i = this.conf[l],
            a = [s.offcanvas];
        "left" != e.position && a.push(s.mm(e.position)), "back" != e.zposition && a.push(s.mm(e.zposition)), this.$menu.addClass(a.join(" ")).parent().removeClass(s.wrapper), this[l + "_initPage"](p.$page), this[l + "_initBlocker"](), this[l + "_initOpenClose"](), this[l + "_bindCustomEvents"](), this.$menu[i.menuInjectMethod + "To"](i.menuWrapperSelector)
    }, e[r].addons = e[r].addons || [], e[r].addons.push(l), e[r].defaults[l] = {
        position: "left",
        zposition: "back",
        modal: !1,
        moveBackground: !0
    }, e[r].configuration[l] = {
        pageNodetype: "div",
        pageSelector: null,
        menuWrapperSelector: "body",
        menuInjectMethod: "prepend"
    }, e[r].prototype.open = function() {
        if (this.vars.opened) return !1;
        var e = this;
        return this._openSetup(), setTimeout(function() {
            e._openFinish()
        }, 25), "open"
    }, e[r].prototype._openSetup = function() {
        p.$allMenus.not(this.$menu).trigger(a.close), p.$page.data(i.style, p.$page.attr("style") || ""), p.$wndw.trigger(a.resize, [!0]);
        var e = [s.opened];
        this.opts[l].modal && e.push(s.modal), this.opts[l].moveBackground && e.push(s.background), "left" != this.opts[l].position && e.push(s.mm(this.opts[l].position)), "back" != this.opts[l].zposition && e.push(s.mm(this.opts[l].zposition)), this.opts.classes && e.push(this.opts.classes), p.$html.addClass(e.join(" ")), this.$menu.addClass(s.current + " " + s.opened)
    }, e[r].prototype._openFinish = function() {
        var e = this;
        this.__transitionend(p.$page, function() {
            e.$menu.trigger(a.opened)
        }, this.conf.transitionDuration), this.vars.opened = !0, p.$html.addClass(s.opening), this.$menu.trigger(a.opening)
    }, e[r].prototype.close = function() {
        if (!this.vars.opened) return !1;
        var e = this;
        return this.__transitionend(p.$page, function() {
            e.$menu.removeClass(s.current).removeClass(s.opened), p.$html.removeClass(s.opened).removeClass(s.modal).removeClass(s.background).removeClass(s.mm(e.opts[l].position)).removeClass(s.mm(e.opts[l].zposition)), e.opts.classes && p.$html.removeClass(e.opts.classes), p.$page.attr("style", p.$page.data(i.style)), e.vars.opened = !1, e.$menu.trigger(a.closed)
        }, this.conf.transitionDuration), p.$html.removeClass(s.opening), this.$menu.trigger(a.closing), "close"
    }, e[r].prototype[l + "_initBlocker"] = function() {
        var o = this;
        p.$blck || (p.$blck = e('<div id="' + s.blocker + '" />').appendTo(p.$body)), p.$blck.off(a.touchstart).on(a.touchstart, function(e) {
            e.preventDefault(), e.stopPropagation(), p.$blck.trigger(a.mousedown)
        }).on(a.mousedown, function(e) {
            e.preventDefault(), p.$html.hasClass(s.modal) || o.close()
        })
    }, e[r].prototype[l + "_initPage"] = function(o) {
        o || (o = e(this.conf[l].pageSelector, p.$body), o.length > 1 && (e[r].debug("Multiple nodes found for the page-node, all nodes are wrapped in one <" + this.conf[l].pageNodetype + ">."), o = o.wrapAll("<" + this.conf[l].pageNodetype + " />").parent())), o.addClass(s.page), p.$page = o
    }, e[r].prototype[l + "_initOpenClose"] = function() {
        var o = this,
            t = this.$menu.attr("id");
        t && t.length && (this.conf.clone && (t = s.umm(t)), e('a[href="#' + t + '"]').off(a.click).on(a.click, function(e) {
            e.preventDefault(), o.open()
        }));
        var t = p.$page.attr("id");
        t && t.length && e('a[href="#' + t + '"]').on(a.click, function(e) {
            e.preventDefault(), o.close()
        })
    }, e[r].prototype[l + "_bindCustomEvents"] = function() {
        var e = this,
            o = a.open + " " + a.opening + " " + a.opened + " " + a.close + " " + a.closing + " " + a.closed + " " + a.setPage;
        this.$menu.off(o).on(o, function(e) {
            e.stopPropagation()
        }), this.$menu.on(a.open, function() {
            e.open()
        }).on(a.close, function() {
            e.close()
        }).on(a.setPage, function(o, t) {
            e[l + "_initPage"](t), e[l + "_initOpenClose"]()
        })
    }
}(jQuery);

/*
 * jQuery mmenu searchfield addon
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 */
! function(e) {
    function s(s) {
        return "boolean" == typeof s && (s = {
            add: s,
            search: s
        }), "object" != typeof s && (s = {}), s = e.extend(!0, {}, e[d].defaults[c], s), "boolean" != typeof s.showLinksOnly && (s.showLinksOnly = "menu" == s.addTo), s
    }

    function n(e) {
        return e
    }

    function t() {
        h = !0, o = e[d]._c, r = e[d]._d, i = e[d]._e, o.add("search hassearch noresultsmsg noresults nosubresults counter"), i.add("search reset change"), l = e[d].glbl
    }

    function a(e) {
        switch (e) {
            case 9:
            case 16:
            case 17:
            case 18:
            case 37:
            case 38:
            case 39:
            case 40:
                return !0
        }
        return !1
    }
    var o, r, i, l, d = "mmenu",
        c = "searchfield",
        h = !1;
    e[d].prototype["_addon_" + c] = function() {
        h || t(), this.opts[c] = s(this.opts[c]), this.conf[c] = n(this.conf[c]);
        var l = this,
            d = this.opts[c];
        if (this.conf[c], d.add) {
            switch (d.addTo) {
                case "menu":
                    var u = this.$menu;
                    break;
                case "panels":
                    var u = e("." + o.panel, this.$menu);
                    break;
                default:
                    var u = e(d.addTo, this.$menu).filter("." + o.panel)
            }
            u.length && u.each(function() {
                var s = e(this),
                    n = s.is("." + o.list) ? "li" : "div",
                    t = e("<" + n + ' class="' + o.search + '" />');
                if (t.append('<input placeholder="' + d.placeholder + '" type="text" autocomplete="off" />'), s.is("." + o.menu)) t.prependTo(l.$menu);
                else {
                    var a = s.children().first(),
                        r = a.is("." + o.subtitle) ? "After" : "Before";
                    t["insert" + r](a)
                }
                d.noResults && (s.is("." + o.menu) && (s = s.find("." + o.panel).first()), n = s.is("." + o.list) ? "li" : "div", e("<" + n + ' class="' + o.noresultsmsg + '" />').html(d.noResults).appendTo(s))
            })
        }
        if (this.$menu.children("div." + o.search).length && this.$menu.addClass(o.hassearch), d.search) {
            var f = e("." + o.search, this.$menu);
            f.length && f.each(function() {
                var s = e(this);
                if ("menu" == d.addTo) var n = e("." + o.panel, l.$menu),
                    t = l.$menu;
                else var n = s.closest("." + o.panel),
                    t = n;
                var c = n.add(n.children("." + o.list)),
                    h = s.find("input"),
                    u = e("> li", c),
                    f = u.filter("." + o.label),
                    p = u.not("." + o.subtitle).not("." + o.label).not("." + o.search).not("." + o.noresultsmsg),
                    m = "> a";
                d.showLinksOnly || (m += ", > span"), h.off(i.keyup + " " + i.change).on(i.keyup, function(e) {
                    a(e.keyCode) || s.trigger(i.search)
                }).on(i.change, function() {
                    s.trigger(i.search)
                }), s.off(i.reset + " " + i.search).on(i.reset + " " + i.search, function(e) {
                    e.stopPropagation()
                }).on(i.reset, function() {
                    s.trigger(i.search, [""])
                }).on(i.search, function(s, a) {
                    "string" == typeof a ? h.val(a) : a = h.val(), a = a.toLowerCase(), n.scrollTop(0), p.add(f).addClass(o.hidden), p.each(function() {
                        var s = e(this);
                        e(m, s).text().toLowerCase().indexOf(a) > -1 && s.add(s.prevAll("." + o.label).first()).removeClass(o.hidden)
                    }), e(n.get().reverse()).each(function(s) {
                        var n = e(this),
                            t = n.data(r.parent);
                        if (t) {
                            var a = n.add(n.find("> ." + o.list)).find("> li").not("." + o.subtitle).not("." + o.search).not("." + o.noresultsmsg).not("." + o.label).not("." + o.hidden);
                            a.length ? t.removeClass(o.hidden).removeClass(o.nosubresults).prevAll("." + o.label).first().removeClass(o.hidden) : "menu" == d.addTo && (n.hasClass(o.opened) && setTimeout(function() {
                                t.trigger(i.open)
                            }, 1.5 * (s + 1) * l.conf.openingInterval), t.addClass(o.nosubresults))
                        }
                    }), t[p.not("." + o.hidden).length ? "removeClass" : "addClass"](o.noresults), l._update()
                })
            })
        }
    }, e[d].addons = e[d].addons || [], e[d].addons.push(c), e[d].defaults[c] = {
        add: !1,
        addTo: "menu",
        search: !1,
        placeholder: "Search...",
        noResults: "No results found."
    }
}(jQuery);

/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */

;
(function($) {
    $.fn.unveil = function(threshold, callback) {
        var $w = $(window),
            th = threshold || 0,
            retina = window.devicePixelRatio > 1,
            attrib = retina ? "data-src-retina" : "data-src",
            images = this,
            loaded;
        this.one("unveil", function() {
            var source = this.getAttribute(attrib);
            source = source || this.getAttribute("data-src");
            if (source) {
                this.setAttribute("src", source);
                if (typeof callback === "function") callback.call(this);
            }
        });

        function unveil() {
            var inview = images.filter(function() {
                var $e = $(this),
                    wt = $w.scrollTop(),
                    wb = wt + $w.height(),
                    et = $e.offset().top,
                    eb = et + $e.height();
                return eb >= wt - th && et <= wb + th;
            });
            loaded = inview.trigger("unveil");
            images = images.not(loaded);
        }
        $w.scroll(unveil);
        $w.resize(unveil);
        unveil();
        return this;
    };
})(window.jQuery || window.Zepto);

/*
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

jQuery.cookie = function(b, j, m) {
    if (typeof j != "undefined") {
        m = m || {};
        if (j === null) {
            j = "";
            m.expires = -1
        }
        var e = "";
        if (m.expires && (typeof m.expires == "number" || m.expires.toUTCString)) {
            var f;
            if (typeof m.expires == "number") {
                f = new Date();
                f.setTime(f.getTime() + (m.expires * 24 * 60 * 60 * 1000))
            } else {
                f = m.expires
            }
            e = "; expires=" + f.toUTCString()
        }
        var l = m.path ? "; path=" + (m.path) : "";
        var g = m.domain ? "; domain=" + (m.domain) : "";
        var a = m.secure ? "; secure" : "";
        document.cookie = [b, "=", encodeURIComponent(j), e, l, g, a].join("")
    } else {
        var d = null;
        if (document.cookie && document.cookie != "") {
            var k = document.cookie.split(";");
            for (var h = 0; h < k.length; h++) {
                var c = jQuery.trim(k[h]);
                if (c.substring(0, b.length + 1) == (b + "=")) {
                    d = decodeURIComponent(c.substring(b.length + 1));
                    break
                }
            }
        }
        return d
    }
};

/*!

Name: Instagram Lite
Dependencies: jQuery
Author: Michael Lynch
Author URL: http://michaelynch.com
Date Created: January 14, 2014
Licensed under the MIT license

*/

;
(function($) {

    $.fn.instagramLite = function(options) {

            // return if no element was bound
            // so chained events can continue
            if (!this.length) {
                return this;
            }

            // define default parameters
            var defaults = {
                username: null,
                clientID: null,
                limit: null,
                list: true,
                videos: false,
                urls: false,
                captions: false,
                date: false,
                likes: false,
                max_id: null,
                loadMore: null,
                error: function() {},
                success: function() {}
            }

            // define plugin
            self.plugin = this;

            // define settings
            self.plugin.settings = {}

            // merge defaults and options
            self.plugin.settings = $.extend({}, defaults, options);

            // define element
            self.el = $(this);

            // init
            self.loadContent();

            // bind load more click event
            if (plugin.settings.loadMore) {
                $(plugin.settings.loadMore).on('click', function(e) {
                    e.preventDefault();
                    self.loadContent();
                });
            }
        },

        getMaxId = function(items) {

            // return id of last item
            return items[items.length - 1].id;
        },

        formatCaption = function(caption) {

            var words = caption.split(' '),
                newCaption = '';

            for (var i = 0; i < words.length; i++) {
                var word;

                if (words[i][0] == '@') {
                    var a = '<a href="http://twitter.com/' + words[i].replace('@', '').toLowerCase() + '" target="_blank">' + words[i] + '</a>';
                    word = a;
                } else if (words[i][0] == '#') {
                    var a = '<a href="http://twitter.com/hashtag/' + words[i].replace('#', '').toLowerCase() + '" target="_blank">' + words[i] + '</a>';
                    word = a;
                } else {
                    word = words[i]
                }

                newCaption += word + ' ';

            }

            return newCaption;

        },

        loadContent = function() {

            // if client ID and username were provided
            if (plugin.settings.clientID && plugin.settings.username) {

                // for each element
                el.each(function() {

                    // search the user
                    // to get user ID
                    $.ajax({
                        type: 'GET',
                        url: 'https://api.instagram.com/v1/users/search?q=' + plugin.settings.username + '&client_id=' + plugin.settings.clientID + '&callback=?',
                        dataType: 'jsonp',
                        success: function(data) {

                            if (data.data.length) {

                                // for each user returned
                                for (var i = 0; i < data.data.length; i++) {

                                    //d efine user namespace
                                    var thisUser = data.data[i];

                                    // if returned username matches supplied username
                                    if (thisUser.username === plugin.settings.username) {

                                        // construct API endpoint
                                        var url = 'https://api.instagram.com/v1/users/' + thisUser.id + '/media/recent/?client_id=' + plugin.settings.clientID + '&count=' + plugin.settings.limit + '&callback=?';

                                        // concat max id if max id is set
                                        url += (plugin.settings.max_id) ? '&max_id=' + plugin.settings.max_id : '';

                                        $.ajax({
                                            type: 'GET',
                                            url: url,
                                            dataType: 'jsonp',
                                            success: function(data) {

                                                // if success status
                                                if (data.meta.code === 200 && data.data.length) {

                                                    // for each piece of media returned
                                                    for (var i = 0; i < data.data.length; i++) {

                                                        // define media namespace
                                                        var thisMedia = data.data[i],
                                                            item;

                                                        // if media type is image
                                                        if (thisMedia.type === 'image') {

                                                            // construct image
                                                            item = '<img class="il-photo__img" src="' + thisMedia.images.standard_resolution.url + '" alt="Instagram Image" data-filter="' + thisMedia.filter + '" />';

                                                            // if url setting is true
                                                            if (plugin.settings.urls) {

                                                                item = '<a href="' + thisMedia.link + '" target="_blank">' + item + '</a>';

                                                            }

                                                            if (plugin.settings.captions || plugin.settings.date || plugin.settings.likes) {
                                                                item += '<div class="il-photo__meta">';
                                                            }

                                                            // if caption setting is true
                                                            if (plugin.settings.captions && thisMedia.caption) {

                                                                item += '<div class="il-photo__caption" data-caption-id="' + thisMedia.caption.id + '">' + self.formatCaption(thisMedia.caption.text) + '</div>';

                                                            }

                                                            // if date setting is true
                                                            if (plugin.settings.date) {

                                                                var date = new Date(thisMedia.created_time * 1000),
                                                                    day = date.getDate(),
                                                                    month = date.getMonth() + 1,
                                                                    year = date.getFullYear(),
                                                                    hours = date.getHours(),
                                                                    minutes = date.getMinutes(),
                                                                    seconds = date.getSeconds();

                                                                date = month + '/' + day + '/' + year;

                                                                item += '<div class="il-photo__date">' + date + '</div>';

                                                            }

                                                            // if likes setting is true
                                                            if (plugin.settings.likes) {

                                                                item += '<div class="il-photo__likes">' + thisMedia.likes.count + '</div>';

                                                            }

                                                            if (plugin.settings.captions || plugin.settings.date || plugin.settings.likes) {
                                                                item += '</div>';
                                                            }

                                                        }

                                                        if (thisMedia.type === 'video' && plugin.settings.videos) {

                                                            if (thisMedia.videos) {

                                                                var src;

                                                                if (thisMedia.videos.standard_resolution) {

                                                                    src = thisMedia.videos.standard_resolution.url;

                                                                } else if (thisMedia.videos.low_resolution) {

                                                                    src = thisMedia.videos.low_resolution.url;

                                                                } else if (thisMedia.videos.low_bandwidth) {

                                                                    src = thisMedia.videos.low_bandwidth.url;

                                                                }

                                                                item = '<video poster="' + thisMedia.images.standard_resolution.url + '" controls>';

                                                                item += '<source src="' + src + '" type="video/mp4;"></source>';

                                                                item += '</video>';

                                                            }
                                                        }

                                                        // if list setting is true
                                                        if (plugin.settings.list) {

                                                            if (i % 4 == 0) {
                                                                var item = "<div class=\"four columns alpha\">" + item + "</div>"
                                                            } else if ((i + 1) % 4 == 0) {
                                                                var item = "<div class=\"four columns omega\">" + item + "</div><br class=\"clear\">"
                                                            } else {
                                                                var item = "<div class=\"four columns\">" + item + "</div>"
                                                            }

                                                        }

                                                        // append image
                                                        el.append(item);

                                                    }

                                                    // set new max id
                                                    plugin.settings.max_id = self.getMaxId(data.data);

                                                    // execute success callback
                                                    plugin.settings.success.call(this);

                                                } else {

                                                    // execute error callback
                                                    plugin.settings.error.call(this, data.meta.code, data.meta.error_message);

                                                }

                                            },
                                            error: function() {

                                                // recent media ajax request failed
                                                // execute error callback
                                                plugin.settings.error.call(this);

                                            }
                                        });

                                        break;

                                    }

                                }

                            } else {

                                // error finding username
                                // execute error callback
                                plugin.settings.error.call(this);

                            }

                        },
                        error: function() {

                            // search username ajax request failed
                            // execute error callback
                            plugin.settings.error.call(this);

                        }
                    });

                });

            } else {
                alert('Both a Client ID and Instagram username are required to display Instagram profile images.');
            }
        }

})(jQuery);


/*!
 * jQuery Smooth Scroll - v1.5.5 - 2015-02-19
 * https://github.com/kswedberg/jquery-smooth-scroll
 * Copyright (c) 2015 Karl Swedberg
 * Licensed MIT (https://github.com/kswedberg/jquery-smooth-scroll/blob/master/LICENSE-MIT)
 */
(function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof module && module.exports ? t(require("jquery")) : t(jQuery)
})(function(t) {
    function e(t) {
        return t.replace(/(:|\.|\/)/g, "\\$1")
    }
    var l = "1.5.5",
        o = {},
        n = {
            exclude: [],
            excludeWithin: [],
            offset: 0,
            direction: "top",
            scrollElement: null,
            scrollTarget: null,
            beforeScroll: function() {},
            afterScroll: function() {},
            easing: "swing",
            speed: 400,
            autoCoefficient: 2,
            preventDefault: !0
        },
        s = function(e) {
            var l = [],
                o = !1,
                n = e.dir && "left" === e.dir ? "scrollLeft" : "scrollTop";
            return this.each(function() {
                if (this !== document && this !== window) {
                    var e = t(this);
                    e[n]() > 0 ? l.push(this) : (e[n](1), o = e[n]() > 0, o && l.push(this), e[n](0))
                }
            }), l.length || this.each(function() {
                "BODY" === this.nodeName && (l = [this])
            }), "first" === e.el && l.length > 1 && (l = [l[0]]), l
        };
    t.fn.extend({
        scrollable: function(t) {
            var e = s.call(this, {
                dir: t
            });
            return this.pushStack(e)
        },
        firstScrollable: function(t) {
            var e = s.call(this, {
                el: "first",
                dir: t
            });
            return this.pushStack(e)
        },
        smoothScroll: function(l, o) {
            if (l = l || {}, "options" === l) return o ? this.each(function() {
                var e = t(this),
                    l = t.extend(e.data("ssOpts") || {}, o);
                t(this).data("ssOpts", l)
            }) : this.first().data("ssOpts");
            var n = t.extend({}, t.fn.smoothScroll.defaults, l),
                s = t.smoothScroll.filterPath(location.pathname);
            return this.unbind("click.smoothscroll").bind("click.smoothscroll", function(l) {
                var o = this,
                    r = t(this),
                    i = t.extend({}, n, r.data("ssOpts") || {}),
                    c = n.exclude,
                    a = i.excludeWithin,
                    f = 0,
                    h = 0,
                    u = !0,
                    d = {},
                    p = location.hostname === o.hostname || !o.hostname,
                    m = i.scrollTarget || t.smoothScroll.filterPath(o.pathname) === s,
                    S = e(o.hash);
                if (i.scrollTarget || p && m && S) {
                    for (; u && c.length > f;) r.is(e(c[f++])) && (u = !1);
                    for (; u && a.length > h;) r.closest(a[h++]).length && (u = !1)
                } else u = !1;
                u && (i.preventDefault && l.preventDefault(), t.extend(d, i, {
                    scrollTarget: i.scrollTarget || S,
                    link: o
                }), t.smoothScroll(d))
            }), this
        }
    }), t.smoothScroll = function(e, l) {
        if ("options" === e && "object" == typeof l) return t.extend(o, l);
        var n, s, r, i, c, a = 0,
            f = "offset",
            h = "scrollTop",
            u = {},
            d = {};
        "number" == typeof e ? (n = t.extend({
            link: null
        }, t.fn.smoothScroll.defaults, o), r = e) : (n = t.extend({
            link: null
        }, t.fn.smoothScroll.defaults, e || {}, o), n.scrollElement && (f = "position", "static" === n.scrollElement.css("position") && n.scrollElement.css("position", "relative"))), h = "left" === n.direction ? "scrollLeft" : h, n.scrollElement ? (s = n.scrollElement, /^(?:HTML|BODY)$/.test(s[0].nodeName) || (a = s[h]())) : s = t("html, body").firstScrollable(n.direction), n.beforeScroll.call(s, n), r = "number" == typeof e ? e : l || t(n.scrollTarget)[f]() && t(n.scrollTarget)[f]()[n.direction] || 0, u[h] = r + a + n.offset, i = n.speed, "auto" === i && (c = u[h] - s.scrollTop(), 0 > c && (c *= -1), i = c / n.autoCoefficient), d = {
            duration: i,
            easing: n.easing,
            complete: function() {
                n.afterScroll.call(n.link, n)
            }
        }, n.step && (d.step = n.step), s.length ? s.stop().animate(u, d) : n.afterScroll.call(n.link, n)
    }, t.smoothScroll.version = l, t.smoothScroll.filterPath = function(t) {
        return t = t || "", t.replace(/^\//, "").replace(/(?:index|default).[a-zA-Z]{3,4}$/, "").replace(/\/$/, "")
    }, t.fn.smoothScroll.defaults = n
});

// Generated by CoffeeScript 1.6.2
/*!
jQuery Waypoints - v2.0.5
Copyright (c) 2011-2014 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/
(function() {
    var t = [].indexOf || function(t) {
            for (var e = 0, n = this.length; e < n; e++) {
                if (e in this && this[e] === t) return e
            }
            return -1
        },
        e = [].slice;
    (function(t, e) {
        if (typeof define === "function" && define.amd) {
            return define("waypoints", ["jquery"], function(n) {
                return e(n, t)
            })
        } else {
            return e(t.jQuery, t)
        }
    })(window, function(n, r) {
        var i, o, l, s, f, u, c, a, h, d, p, y, v, w, g, m;
        i = n(r);
        a = t.call(r, "ontouchstart") >= 0;
        s = {
            horizontal: {},
            vertical: {}
        };
        f = 1;
        c = {};
        u = "waypoints-context-id";
        p = "resize.waypoints";
        y = "scroll.waypoints";
        v = 1;
        w = "waypoints-waypoint-ids";
        g = "waypoint";
        m = "waypoints";
        o = function() {
            function t(t) {
                var e = this;
                this.$element = t;
                this.element = t[0];
                this.didResize = false;
                this.didScroll = false;
                this.id = "context" + f++;
                this.oldScroll = {
                    x: t.scrollLeft(),
                    y: t.scrollTop()
                };
                this.waypoints = {
                    horizontal: {},
                    vertical: {}
                };
                this.element[u] = this.id;
                c[this.id] = this;
                t.bind(y, function() {
                    var t;
                    if (!(e.didScroll || a)) {
                        e.didScroll = true;
                        t = function() {
                            e.doScroll();
                            return e.didScroll = false
                        };
                        return r.setTimeout(t, n[m].settings.scrollThrottle)
                    }
                });
                t.bind(p, function() {
                    var t;
                    if (!e.didResize) {
                        e.didResize = true;
                        t = function() {
                            n[m]("refresh");
                            return e.didResize = false
                        };
                        return r.setTimeout(t, n[m].settings.resizeThrottle)
                    }
                })
            }
            t.prototype.doScroll = function() {
                var t, e = this;
                t = {
                    horizontal: {
                        newScroll: this.$element.scrollLeft(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left"
                    },
                    vertical: {
                        newScroll: this.$element.scrollTop(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up"
                    }
                };
                if (a && (!t.vertical.oldScroll || !t.vertical.newScroll)) {
                    n[m]("refresh")
                }
                n.each(t, function(t, r) {
                    var i, o, l;
                    l = [];
                    o = r.newScroll > r.oldScroll;
                    i = o ? r.forward : r.backward;
                    n.each(e.waypoints[t], function(t, e) {
                        var n, i;
                        if (r.oldScroll < (n = e.offset) && n <= r.newScroll) {
                            return l.push(e)
                        } else if (r.newScroll < (i = e.offset) && i <= r.oldScroll) {
                            return l.push(e)
                        }
                    });
                    l.sort(function(t, e) {
                        return t.offset - e.offset
                    });
                    if (!o) {
                        l.reverse()
                    }
                    return n.each(l, function(t, e) {
                        if (e.options.continuous || t === l.length - 1) {
                            return e.trigger([i])
                        }
                    })
                });
                return this.oldScroll = {
                    x: t.horizontal.newScroll,
                    y: t.vertical.newScroll
                }
            };
            t.prototype.refresh = function() {
                var t, e, r, i = this;
                r = n.isWindow(this.element);
                e = this.$element.offset();
                this.doScroll();
                t = {
                    horizontal: {
                        contextOffset: r ? 0 : e.left,
                        contextScroll: r ? 0 : this.oldScroll.x,
                        contextDimension: this.$element.width(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                        offsetProp: "left"
                    },
                    vertical: {
                        contextOffset: r ? 0 : e.top,
                        contextScroll: r ? 0 : this.oldScroll.y,
                        contextDimension: r ? n[m]("viewportHeight") : this.$element.height(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                        offsetProp: "top"
                    }
                };
                return n.each(t, function(t, e) {
                    return n.each(i.waypoints[t], function(t, r) {
                        var i, o, l, s, f;
                        i = r.options.offset;
                        l = r.offset;
                        o = n.isWindow(r.element) ? 0 : r.$element.offset()[e.offsetProp];
                        if (n.isFunction(i)) {
                            i = i.apply(r.element)
                        } else if (typeof i === "string") {
                            i = parseFloat(i);
                            if (r.options.offset.indexOf("%") > -1) {
                                i = Math.ceil(e.contextDimension * i / 100)
                            }
                        }
                        r.offset = o - e.contextOffset + e.contextScroll - i;
                        if (r.options.onlyOnScroll && l != null || !r.enabled) {
                            return
                        }
                        if (l !== null && l < (s = e.oldScroll) && s <= r.offset) {
                            return r.trigger([e.backward])
                        } else if (l !== null && l > (f = e.oldScroll) && f >= r.offset) {
                            return r.trigger([e.forward])
                        } else if (l === null && e.oldScroll >= r.offset) {
                            return r.trigger([e.forward])
                        }
                    })
                })
            };
            t.prototype.checkEmpty = function() {
                if (n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical)) {
                    this.$element.unbind([p, y].join(" "));
                    return delete c[this.id]
                }
            };
            return t
        }();
        l = function() {
            function t(t, e, r) {
                var i, o;
                if (r.offset === "bottom-in-view") {
                    r.offset = function() {
                        var t;
                        t = n[m]("viewportHeight");
                        if (!n.isWindow(e.element)) {
                            t = e.$element.height()
                        }
                        return t - n(this).outerHeight()
                    }
                }
                this.$element = t;
                this.element = t[0];
                this.axis = r.horizontal ? "horizontal" : "vertical";
                this.callback = r.handler;
                this.context = e;
                this.enabled = r.enabled;
                this.id = "waypoints" + v++;
                this.offset = null;
                this.options = r;
                e.waypoints[this.axis][this.id] = this;
                s[this.axis][this.id] = this;
                i = (o = this.element[w]) != null ? o : [];
                i.push(this.id);
                this.element[w] = i
            }
            t.prototype.trigger = function(t) {
                if (!this.enabled) {
                    return
                }
                if (this.callback != null) {
                    this.callback.apply(this.element, t)
                }
                if (this.options.triggerOnce) {
                    return this.destroy()
                }
            };
            t.prototype.disable = function() {
                return this.enabled = false
            };
            t.prototype.enable = function() {
                this.context.refresh();
                return this.enabled = true
            };
            t.prototype.destroy = function() {
                delete s[this.axis][this.id];
                delete this.context.waypoints[this.axis][this.id];
                return this.context.checkEmpty()
            };
            t.getWaypointsByElement = function(t) {
                var e, r;
                r = t[w];
                if (!r) {
                    return []
                }
                e = n.extend({}, s.horizontal, s.vertical);
                return n.map(r, function(t) {
                    return e[t]
                })
            };
            return t
        }();
        d = {
            init: function(t, e) {
                var r;
                e = n.extend({}, n.fn[g].defaults, e);
                if ((r = e.handler) == null) {
                    e.handler = t
                }
                this.each(function() {
                    var t, r, i, s;
                    t = n(this);
                    i = (s = e.context) != null ? s : n.fn[g].defaults.context;
                    if (!n.isWindow(i)) {
                        i = t.closest(i)
                    }
                    i = n(i);
                    r = c[i[0][u]];
                    if (!r) {
                        r = new o(i)
                    }
                    return new l(t, r, e)
                });
                n[m]("refresh");
                return this
            },
            disable: function() {
                return d._invoke.call(this, "disable")
            },
            enable: function() {
                return d._invoke.call(this, "enable")
            },
            destroy: function() {
                return d._invoke.call(this, "destroy")
            },
            prev: function(t, e) {
                return d._traverse.call(this, t, e, function(t, e, n) {
                    if (e > 0) {
                        return t.push(n[e - 1])
                    }
                })
            },
            next: function(t, e) {
                return d._traverse.call(this, t, e, function(t, e, n) {
                    if (e < n.length - 1) {
                        return t.push(n[e + 1])
                    }
                })
            },
            _traverse: function(t, e, i) {
                var o, l;
                if (t == null) {
                    t = "vertical"
                }
                if (e == null) {
                    e = r
                }
                l = h.aggregate(e);
                o = [];
                this.each(function() {
                    var e;
                    e = n.inArray(this, l[t]);
                    return i(o, e, l[t])
                });
                return this.pushStack(o)
            },
            _invoke: function(t) {
                this.each(function() {
                    var e;
                    e = l.getWaypointsByElement(this);
                    return n.each(e, function(e, n) {
                        n[t]();
                        return true
                    })
                });
                return this
            }
        };
        n.fn[g] = function() {
            var t, r;
            r = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
            if (d[r]) {
                return d[r].apply(this, t)
            } else if (n.isFunction(r)) {
                return d.init.apply(this, arguments)
            } else if (n.isPlainObject(r)) {
                return d.init.apply(this, [null, r])
            } else if (!r) {
                return n.error("jQuery Waypoints needs a callback function or handler option.")
            } else {
                return n.error("The " + r + " method does not exist in jQuery Waypoints.")
            }
        };
        n.fn[g].defaults = {
            context: r,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: 0,
            triggerOnce: false
        };
        h = {
            refresh: function() {
                return n.each(c, function(t, e) {
                    return e.refresh()
                })
            },
            viewportHeight: function() {
                var t;
                return (t = r.innerHeight) != null ? t : i.height()
            },
            aggregate: function(t) {
                var e, r, i;
                e = s;
                if (t) {
                    e = (i = c[n(t)[0][u]]) != null ? i.waypoints : void 0
                }
                if (!e) {
                    return []
                }
                r = {
                    horizontal: [],
                    vertical: []
                };
                n.each(r, function(t, i) {
                    n.each(e[t], function(t, e) {
                        return i.push(e)
                    });
                    i.sort(function(t, e) {
                        return t.offset - e.offset
                    });
                    r[t] = n.map(i, function(t) {
                        return t.element
                    });
                    return r[t] = n.unique(r[t])
                });
                return r
            },
            above: function(t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "vertical", function(t, e) {
                    return e.offset <= t.oldScroll.y
                })
            },
            below: function(t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "vertical", function(t, e) {
                    return e.offset > t.oldScroll.y
                })
            },
            left: function(t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "horizontal", function(t, e) {
                    return e.offset <= t.oldScroll.x
                })
            },
            right: function(t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "horizontal", function(t, e) {
                    return e.offset > t.oldScroll.x
                })
            },
            enable: function() {
                return h._invoke("enable")
            },
            disable: function() {
                return h._invoke("disable")
            },
            destroy: function() {
                return h._invoke("destroy")
            },
            extendFn: function(t, e) {
                return d[t] = e
            },
            _invoke: function(t) {
                var e;
                e = n.extend({}, s.vertical, s.horizontal);
                return n.each(e, function(e, n) {
                    n[t]();
                    return true
                })
            },
            _filter: function(t, e, r) {
                var i, o;
                i = c[n(t)[0][u]];
                if (!i) {
                    return []
                }
                o = [];
                n.each(i.waypoints[e], function(t, e) {
                    if (r(i, e)) {
                        return o.push(e)
                    }
                });
                o.sort(function(t, e) {
                    return t.offset - e.offset
                });
                return n.map(o, function(t) {
                    return t.element
                })
            }
        };
        n[m] = function() {
            var t, n;
            n = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
            if (h[n]) {
                return h[n].apply(null, t)
            } else {
                return h.aggregate.call(null, n)
            }
        };
        n[m].settings = {
            resizeThrottle: 100,
            scrollThrottle: 30
        };
        return i.on("load.waypoints", function() {
            return n[m]("refresh")
        })
    })
}).call(this);

/*! skrollr 0.6.30 (2015-08-12) | Alexander Prinzhorn - https://github.com/Prinzhorn/skrollr | Free to use under terms of MIT license */
! function(a, b, c) {
    "use strict";

    function d(c) {
        if (e = b.documentElement, f = b.body, T(), ha = this, c = c || {}, ma = c.constants || {}, c.easing)
            for (var d in c.easing) W[d] = c.easing[d];
        ta = c.edgeStrategy || "set", ka = {
            beforerender: c.beforerender,
            render: c.render,
            keyframe: c.keyframe
        }, la = c.forceHeight !== !1, la && (Ka = c.scale || 1), na = c.mobileDeceleration || y, pa = c.smoothScrolling !== !1, qa = c.smoothScrollingDuration || A, ra = {
            targetTop: ha.getScrollTop()
        }, Sa = (c.mobileCheck || function() {
            return /Android|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent || navigator.vendor || a.opera)
        })(), Sa ? (ja = b.getElementById(c.skrollrBody || z), ja && ga(), X(), Ea(e, [s, v], [t])) : Ea(e, [s, u], [t]), ha.refresh(), wa(a, "resize orientationchange", function() {
            var a = e.clientWidth,
                b = e.clientHeight;
            (b !== Pa || a !== Oa) && (Pa = b, Oa = a, Qa = !0)
        });
        var g = U();
        return function h() {
            $(), va = g(h)
        }(), ha
    }
    var e, f, g = {
            get: function() {
                return ha
            },
            init: function(a) {
                return ha || new d(a)
            },
            VERSION: "0.6.30"
        },
        h = Object.prototype.hasOwnProperty,
        i = a.Math,
        j = a.getComputedStyle,
        k = "touchstart",
        l = "touchmove",
        m = "touchcancel",
        n = "touchend",
        o = "skrollable",
        p = o + "-before",
        q = o + "-between",
        r = o + "-after",
        s = "skrollr",
        t = "no-" + s,
        u = s + "-desktop",
        v = s + "-mobile",
        w = "linear",
        x = 1e3,
        y = .004,
        z = "skrollr-body",
        A = 200,
        B = "start",
        C = "end",
        D = "center",
        E = "bottom",
        F = "___skrollable_id",
        G = /^(?:input|textarea|button|select)$/i,
        H = /^\s+|\s+$/g,
        I = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,
        J = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,
        K = /^(@?[a-z\-]+)\[(\w+)\]$/,
        L = /-([a-z0-9_])/g,
        M = function(a, b) {
            return b.toUpperCase()
        },
        N = /[\-+]?[\d]*\.?[\d]+/g,
        O = /\{\?\}/g,
        P = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,
        Q = /[a-z\-]+-gradient/g,
        R = "",
        S = "",
        T = function() {
            var a = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;
            if (j) {
                var b = j(f, null);
                for (var c in b)
                    if (R = c.match(a) || +c == c && b[c].match(a)) break;
                if (!R) return void(R = S = "");
                R = R[0], "-" === R.slice(0, 1) ? (S = R, R = {
                    "-webkit-": "webkit",
                    "-moz-": "Moz",
                    "-ms-": "ms",
                    "-o-": "O"
                }[R]) : S = "-" + R.toLowerCase() + "-"
            }
        },
        U = function() {
            var b = a.requestAnimationFrame || a[R.toLowerCase() + "RequestAnimationFrame"],
                c = Ha();
            return (Sa || !b) && (b = function(b) {
                var d = Ha() - c,
                    e = i.max(0, 1e3 / 60 - d);
                return a.setTimeout(function() {
                    c = Ha(), b()
                }, e)
            }), b
        },
        V = function() {
            var b = a.cancelAnimationFrame || a[R.toLowerCase() + "CancelAnimationFrame"];
            return (Sa || !b) && (b = function(b) {
                return a.clearTimeout(b)
            }), b
        },
        W = {
            begin: function() {
                return 0
            },
            end: function() {
                return 1
            },
            linear: function(a) {
                return a
            },
            quadratic: function(a) {
                return a * a
            },
            cubic: function(a) {
                return a * a * a
            },
            swing: function(a) {
                return -i.cos(a * i.PI) / 2 + .5
            },
            sqrt: function(a) {
                return i.sqrt(a)
            },
            outCubic: function(a) {
                return i.pow(a - 1, 3) + 1
            },
            bounce: function(a) {
                var b;
                if (.5083 >= a) b = 3;
                else if (.8489 >= a) b = 9;
                else if (.96208 >= a) b = 27;
                else {
                    if (!(.99981 >= a)) return 1;
                    b = 91
                }
                return 1 - i.abs(3 * i.cos(a * b * 1.028) / b)
            }
        };
    d.prototype.refresh = function(a) {
        var d, e, f = !1;
        for (a === c ? (f = !0, ia = [], Ra = 0, a = b.getElementsByTagName("*")) : a.length === c && (a = [a]), d = 0, e = a.length; e > d; d++) {
            var g = a[d],
                h = g,
                i = [],
                j = pa,
                k = ta,
                l = !1;
            if (f && F in g && delete g[F], g.attributes) {
                for (var m = 0, n = g.attributes.length; n > m; m++) {
                    var p = g.attributes[m];
                    if ("data-anchor-target" !== p.name)
                        if ("data-smooth-scrolling" !== p.name)
                            if ("data-edge-strategy" !== p.name)
                                if ("data-emit-events" !== p.name) {
                                    var q = p.name.match(I);
                                    if (null !== q) {
                                        var r = {
                                            props: p.value,
                                            element: g,
                                            eventType: p.name.replace(L, M)
                                        };
                                        i.push(r);
                                        var s = q[1];
                                        s && (r.constant = s.substr(1));
                                        var t = q[2];
                                        /p$/.test(t) ? (r.isPercentage = !0, r.offset = (0 | t.slice(0, -1)) / 100) : r.offset = 0 | t;
                                        var u = q[3],
                                            v = q[4] || u;
                                        u && u !== B && u !== C ? (r.mode = "relative", r.anchors = [u, v]) : (r.mode = "absolute", u === C ? r.isEnd = !0 : r.isPercentage || (r.offset = r.offset * Ka))
                                    }
                                } else l = !0;
                    else k = p.value;
                    else j = "off" !== p.value;
                    else if (h = b.querySelector(p.value), null === h) throw 'Unable to find anchor target "' + p.value + '"'
                }
                if (i.length) {
                    var w, x, y;
                    !f && F in g ? (y = g[F], w = ia[y].styleAttr, x = ia[y].classAttr) : (y = g[F] = Ra++, w = g.style.cssText, x = Da(g)), ia[y] = {
                        element: g,
                        styleAttr: w,
                        classAttr: x,
                        anchorTarget: h,
                        keyFrames: i,
                        smoothScrolling: j,
                        edgeStrategy: k,
                        emitEvents: l,
                        lastFrameIndex: -1
                    }, Ea(g, [o], [])
                }
            }
        }
        for (Aa(), d = 0, e = a.length; e > d; d++) {
            var z = ia[a[d][F]];
            z !== c && (_(z), ba(z))
        }
        return ha
    }, d.prototype.relativeToAbsolute = function(a, b, c) {
        var d = e.clientHeight,
            f = a.getBoundingClientRect(),
            g = f.top,
            h = f.bottom - f.top;
        return b === E ? g -= d : b === D && (g -= d / 2), c === E ? g += h : c === D && (g += h / 2), g += ha.getScrollTop(), g + .5 | 0
    }, d.prototype.animateTo = function(a, b) {
        b = b || {};
        var d = Ha(),
            e = ha.getScrollTop(),
            f = b.duration === c ? x : b.duration;
        return oa = {
            startTop: e,
            topDiff: a - e,
            targetTop: a,
            duration: f,
            startTime: d,
            endTime: d + f,
            easing: W[b.easing || w],
            done: b.done
        }, oa.topDiff || (oa.done && oa.done.call(ha, !1), oa = c), ha
    }, d.prototype.stopAnimateTo = function() {
        oa && oa.done && oa.done.call(ha, !0), oa = c
    }, d.prototype.isAnimatingTo = function() {
        return !!oa
    }, d.prototype.isMobile = function() {
        return Sa
    }, d.prototype.setScrollTop = function(b, c) {
        return sa = c === !0, Sa ? Ta = i.min(i.max(b, 0), Ja) : a.scrollTo(0, b), ha
    }, d.prototype.getScrollTop = function() {
        return Sa ? Ta : a.pageYOffset || e.scrollTop || f.scrollTop || 0
    }, d.prototype.getMaxScrollTop = function() {
        return Ja
    }, d.prototype.on = function(a, b) {
        return ka[a] = b, ha
    }, d.prototype.off = function(a) {
        return delete ka[a], ha
    }, d.prototype.destroy = function() {
        var a = V();
        a(va), ya(), Ea(e, [t], [s, u, v]);
        for (var b = 0, d = ia.length; d > b; b++) fa(ia[b].element);
        e.style.overflow = f.style.overflow = "", e.style.height = f.style.height = "", ja && g.setStyle(ja, "transform", "none"), ha = c, ja = c, ka = c, la = c, Ja = 0, Ka = 1, ma = c, na = c, La = "down", Ma = -1, Oa = 0, Pa = 0, Qa = !1, oa = c, pa = c, qa = c, ra = c, sa = c, Ra = 0, ta = c, Sa = !1, Ta = 0, ua = c
    };
    var X = function() {
            var d, g, h, j, o, p, q, r, s, t, u, v;
            wa(e, [k, l, m, n].join(" "), function(a) {
                var e = a.changedTouches[0];
                for (j = a.target; 3 === j.nodeType;) j = j.parentNode;
                switch (o = e.clientY, p = e.clientX, t = a.timeStamp, G.test(j.tagName) || a.preventDefault(), a.type) {
                    case k:
                        d && d.blur(), ha.stopAnimateTo(), d = j, g = q = o, h = p, s = t;
                        break;
                    case l:
                        G.test(j.tagName) && b.activeElement !== j && a.preventDefault(), r = o - q, v = t - u, ha.setScrollTop(Ta - r, !0), q = o, u = t;
                        break;
                    default:
                    case m:
                    case n:
                        var f = g - o,
                            w = h - p,
                            x = w * w + f * f;
                        if (49 > x) {
                            if (!G.test(d.tagName)) {
                                d.focus();
                                var y = b.createEvent("MouseEvents");
                                y.initMouseEvent("click", !0, !0, a.view, 1, e.screenX, e.screenY, e.clientX, e.clientY, a.ctrlKey, a.altKey, a.shiftKey, a.metaKey, 0, null), d.dispatchEvent(y)
                            }
                            return
                        }
                        d = c;
                        var z = r / v;
                        z = i.max(i.min(z, 3), -3);
                        var A = i.abs(z / na),
                            B = z * A + .5 * na * A * A,
                            C = ha.getScrollTop() - B,
                            D = 0;
                        C > Ja ? (D = (Ja - C) / B, C = Ja) : 0 > C && (D = -C / B, C = 0), A *= 1 - D, ha.animateTo(C + .5 | 0, {
                            easing: "outCubic",
                            duration: A
                        })
                }
            }), a.scrollTo(0, 0), e.style.overflow = f.style.overflow = "hidden"
        },
        Y = function() {
            var a, b, c, d, f, g, h, j, k, l, m, n = e.clientHeight,
                o = Ba();
            for (j = 0, k = ia.length; k > j; j++)
                for (a = ia[j], b = a.element, c = a.anchorTarget, d = a.keyFrames, f = 0, g = d.length; g > f; f++) h = d[f], l = h.offset, m = o[h.constant] || 0, h.frame = l, h.isPercentage && (l *= n, h.frame = l), "relative" === h.mode && (fa(b), h.frame = ha.relativeToAbsolute(c, h.anchors[0], h.anchors[1]) - l, fa(b, !0)), h.frame += m, la && !h.isEnd && h.frame > Ja && (Ja = h.frame);
            for (Ja = i.max(Ja, Ca()), j = 0, k = ia.length; k > j; j++) {
                for (a = ia[j], d = a.keyFrames, f = 0, g = d.length; g > f; f++) h = d[f], m = o[h.constant] || 0, h.isEnd && (h.frame = Ja - h.offset + m);
                a.keyFrames.sort(Ia)
            }
        },
        Z = function(a, b) {
            for (var c = 0, d = ia.length; d > c; c++) {
                var e, f, i = ia[c],
                    j = i.element,
                    k = i.smoothScrolling ? a : b,
                    l = i.keyFrames,
                    m = l.length,
                    n = l[0],
                    s = l[l.length - 1],
                    t = k < n.frame,
                    u = k > s.frame,
                    v = t ? n : s,
                    w = i.emitEvents,
                    x = i.lastFrameIndex;
                if (t || u) {
                    if (t && -1 === i.edge || u && 1 === i.edge) continue;
                    switch (t ? (Ea(j, [p], [r, q]), w && x > -1 && (za(j, n.eventType, La), i.lastFrameIndex = -1)) : (Ea(j, [r], [p, q]), w && m > x && (za(j, s.eventType, La), i.lastFrameIndex = m)), i.edge = t ? -1 : 1, i.edgeStrategy) {
                        case "reset":
                            fa(j);
                            continue;
                        case "ease":
                            k = v.frame;
                            break;
                        default:
                        case "set":
                            var y = v.props;
                            for (e in y) h.call(y, e) && (f = ea(y[e].value), 0 === e.indexOf("@") ? j.setAttribute(e.substr(1), f) : g.setStyle(j, e, f));
                            continue
                    }
                } else 0 !== i.edge && (Ea(j, [o, q], [p, r]), i.edge = 0);
                for (var z = 0; m - 1 > z; z++)
                    if (k >= l[z].frame && k <= l[z + 1].frame) {
                        var A = l[z],
                            B = l[z + 1];
                        for (e in A.props)
                            if (h.call(A.props, e)) {
                                var C = (k - A.frame) / (B.frame - A.frame);
                                C = A.props[e].easing(C), f = da(A.props[e].value, B.props[e].value, C), f = ea(f), 0 === e.indexOf("@") ? j.setAttribute(e.substr(1), f) : g.setStyle(j, e, f)
                            }
                        w && x !== z && ("down" === La ? za(j, A.eventType, La) : za(j, B.eventType, La), i.lastFrameIndex = z);
                        break
                    }
            }
        },
        $ = function() {
            Qa && (Qa = !1, Aa());
            var a, b, d = ha.getScrollTop(),
                e = Ha();
            if (oa) e >= oa.endTime ? (d = oa.targetTop, a = oa.done, oa = c) : (b = oa.easing((e - oa.startTime) / oa.duration), d = oa.startTop + b * oa.topDiff | 0), ha.setScrollTop(d, !0);
            else if (!sa) {
                var f = ra.targetTop - d;
                f && (ra = {
                    startTop: Ma,
                    topDiff: d - Ma,
                    targetTop: d,
                    startTime: Na,
                    endTime: Na + qa
                }), e <= ra.endTime && (b = W.sqrt((e - ra.startTime) / qa), d = ra.startTop + b * ra.topDiff | 0)
            }
            if (sa || Ma !== d) {
                La = d > Ma ? "down" : Ma > d ? "up" : La, sa = !1;
                var h = {
                        curTop: d,
                        lastTop: Ma,
                        maxTop: Ja,
                        direction: La
                    },
                    i = ka.beforerender && ka.beforerender.call(ha, h);
                i !== !1 && (Z(d, ha.getScrollTop()), Sa && ja && g.setStyle(ja, "transform", "translate(0, " + -Ta + "px) " + ua), Ma = d, ka.render && ka.render.call(ha, h)), a && a.call(ha, !1)
            }
            Na = e
        },
        _ = function(a) {
            for (var b = 0, c = a.keyFrames.length; c > b; b++) {
                for (var d, e, f, g, h = a.keyFrames[b], i = {}; null !== (g = J.exec(h.props));) f = g[1], e = g[2], d = f.match(K), null !== d ? (f = d[1], d = d[2]) : d = w, e = e.indexOf("!") ? aa(e) : [e.slice(1)], i[f] = {
                    value: e,
                    easing: W[d]
                };
                h.props = i
            }
        },
        aa = function(a) {
            var b = [];
            return P.lastIndex = 0, a = a.replace(P, function(a) {
                return a.replace(N, function(a) {
                    return a / 255 * 100 + "%"
                })
            }), S && (Q.lastIndex = 0, a = a.replace(Q, function(a) {
                return S + a
            })), a = a.replace(N, function(a) {
                return b.push(+a), "{?}"
            }), b.unshift(a), b
        },
        ba = function(a) {
            var b, c, d = {};
            for (b = 0, c = a.keyFrames.length; c > b; b++) ca(a.keyFrames[b], d);
            for (d = {}, b = a.keyFrames.length - 1; b >= 0; b--) ca(a.keyFrames[b], d)
        },
        ca = function(a, b) {
            var c;
            for (c in b) h.call(a.props, c) || (a.props[c] = b[c]);
            for (c in a.props) b[c] = a.props[c]
        },
        da = function(a, b, c) {
            var d, e = a.length;
            if (e !== b.length) throw "Can't interpolate between \"" + a[0] + '" and "' + b[0] + '"';
            var f = [a[0]];
            for (d = 1; e > d; d++) f[d] = a[d] + (b[d] - a[d]) * c;
            return f
        },
        ea = function(a) {
            var b = 1;
            return O.lastIndex = 0, a[0].replace(O, function() {
                return a[b++]
            })
        },
        fa = function(a, b) {
            a = [].concat(a);
            for (var c, d, e = 0, f = a.length; f > e; e++) d = a[e], c = ia[d[F]], c && (b ? (d.style.cssText = c.dirtyStyleAttr, Ea(d, c.dirtyClassAttr)) : (c.dirtyStyleAttr = d.style.cssText, c.dirtyClassAttr = Da(d), d.style.cssText = c.styleAttr, Ea(d, c.classAttr)))
        },
        ga = function() {
            ua = "translateZ(0)", g.setStyle(ja, "transform", ua);
            var a = j(ja),
                b = a.getPropertyValue("transform"),
                c = a.getPropertyValue(S + "transform"),
                d = b && "none" !== b || c && "none" !== c;
            d || (ua = "")
        };
    g.setStyle = function(a, b, c) {
        var d = a.style;
        if (b = b.replace(L, M).replace("-", ""), "zIndex" === b) isNaN(c) ? d[b] = c : d[b] = "" + (0 | c);
        else if ("float" === b) d.styleFloat = d.cssFloat = c;
        else try {
            R && (d[R + b.slice(0, 1).toUpperCase() + b.slice(1)] = c), d[b] = c
        } catch (e) {}
    };
    var ha, ia, ja, ka, la, ma, na, oa, pa, qa, ra, sa, ta, ua, va, wa = g.addEvent = function(b, c, d) {
            var e = function(b) {
                return b = b || a.event, b.target || (b.target = b.srcElement), b.preventDefault || (b.preventDefault = function() {
                    b.returnValue = !1, b.defaultPrevented = !0
                }), d.call(this, b)
            };
            c = c.split(" ");
            for (var f, g = 0, h = c.length; h > g; g++) f = c[g], b.addEventListener ? b.addEventListener(f, d, !1) : b.attachEvent("on" + f, e), Ua.push({
                element: b,
                name: f,
                listener: d
            })
        },
        xa = g.removeEvent = function(a, b, c) {
            b = b.split(" ");
            for (var d = 0, e = b.length; e > d; d++) a.removeEventListener ? a.removeEventListener(b[d], c, !1) : a.detachEvent("on" + b[d], c)
        },
        ya = function() {
            for (var a, b = 0, c = Ua.length; c > b; b++) a = Ua[b], xa(a.element, a.name, a.listener);
            Ua = []
        },
        za = function(a, b, c) {
            ka.keyframe && ka.keyframe.call(ha, a, b, c)
        },
        Aa = function() {
            var a = ha.getScrollTop();
            Ja = 0, la && !Sa && (f.style.height = ""), Y(), la && !Sa && (f.style.height = Ja + e.clientHeight + "px"), Sa ? ha.setScrollTop(i.min(ha.getScrollTop(), Ja)) : ha.setScrollTop(a, !0), sa = !0
        },
        Ba = function() {
            var a, b, c = e.clientHeight,
                d = {};
            for (a in ma) b = ma[a], "function" == typeof b ? b = b.call(ha) : /p$/.test(b) && (b = b.slice(0, -1) / 100 * c), d[a] = b;
            return d
        },
        Ca = function() {
            var a, b = 0;
            return ja && (b = i.max(ja.offsetHeight, ja.scrollHeight)), a = i.max(b, f.scrollHeight, f.offsetHeight, e.scrollHeight, e.offsetHeight, e.clientHeight), a - e.clientHeight
        },
        Da = function(b) {
            var c = "className";
            return a.SVGElement && b instanceof a.SVGElement && (b = b[c], c = "baseVal"), b[c]
        },
        Ea = function(b, d, e) {
            var f = "className";
            if (a.SVGElement && b instanceof a.SVGElement && (b = b[f], f = "baseVal"), e === c) return void(b[f] = d);
            for (var g = b[f], h = 0, i = e.length; i > h; h++) g = Ga(g).replace(Ga(e[h]), " ");
            g = Fa(g);
            for (var j = 0, k = d.length; k > j; j++) - 1 === Ga(g).indexOf(Ga(d[j])) && (g += " " + d[j]);
            b[f] = Fa(g)
        },
        Fa = function(a) {
            return a.replace(H, "")
        },
        Ga = function(a) {
            return " " + a + " "
        },
        Ha = Date.now || function() {
            return +new Date
        },
        Ia = function(a, b) {
            return a.frame - b.frame
        },
        Ja = 0,
        Ka = 1,
        La = "down",
        Ma = -1,
        Na = Ha(),
        Oa = 0,
        Pa = 0,
        Qa = !1,
        Ra = 0,
        Sa = !1,
        Ta = 0,
        Ua = [];
    "function" == typeof define && define.amd ? define([], function() {
        return g
    }) : "undefined" != typeof module && module.exports ? module.exports = g : a.skrollr = g
}(window, document);

if (!$('html').hasClass('ie')) {
    ! function(e) {
        if ("object" == typeof exports && "undefined" != typeof module) module.exports = e();
        else if ("function" == typeof define && define.amd) define([], e);
        else {
            var f;
            "undefined" != typeof window ? f = window : "undefined" != typeof global ? f = global : "undefined" != typeof self && (f = self), f.Share = e()
        }
    }(function() {
        var define, module, exports;

        function getStyles(config) {
            return "" + config.selector + "{width:92px;height:20px;-webkit-touch-callout:none;-khtml-user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}" + config.selector + " [class*=entypo-]:before{font-family:entypo,sans-serif}" + config.selector + " label{font-size:16px;cursor:pointer;margin:0;padding:5px 10px;border-radius:5px;background:#a29baa;color:#333;-webkit-transition:all .3s ease;transition:all .3s ease}" + config.selector + " label:hover{opacity:.8}" + config.selector + " label span{text-transform:uppercase;font-size:.9em;font-family:Lato,sans-serif;font-weight:700;-webkit-font-smoothing:antialiased;padding-left:6px}" + config.selector + " .social{opacity:0;-webkit-transition:all .4s ease;transition:all .4s ease;margin-left:-15px;visibility:hidden}" + config.selector + " .social.top{-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;margin-top:-80px}" + config.selector + " .social.bottom{-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;margin-top:5px}" + config.selector + " .social.middle{margin-top:-34px}" + config.selector + " .social.middle.right{-webkit-transform-origin:5% 50%;-ms-transform-origin:5% 50%;transform-origin:5% 50%;margin-left:105px}" + config.selector + " .social.middle.left{-webkit-transform-origin:5% 50%;-ms-transform-origin:5% 50%;transform-origin:5% 50%}" + config.selector + " .social.right{margin-left:14px}" + config.selector + " .social.load{-webkit-transition:none!important;transition:none!important}" + config.selector + " .social.networks-1{width:60px}" + config.selector + " .social.networks-1.center," + config.selector + " .social.networks-1.left{margin-left:14px}" + config.selector + " .social.networks-1.middle.left{margin-left:-70px}" + config.selector + " .social.networks-1 ul{width:60px}" + config.selector + " .social.networks-2{width:120px}" + config.selector + " .social.networks-2.center{margin-left:-13px}" + config.selector + " .social.networks-2.left{margin-left:-44px}" + config.selector + " .social.networks-2.middle.left{margin-left:-130px}" + config.selector + " .social.networks-2 ul{width:120px}" + config.selector + " .social.networks-3{width:180px}" + config.selector + " .social.networks-3.center{margin-left:-45px}" + config.selector + " .social.networks-3.left{margin-left:-102px}" + config.selector + " .social.networks-3.middle.left{margin-left:-190px}" + config.selector + " .social.networks-3 ul{width:180px}" + config.selector + " .social.networks-4{width:240px}" + config.selector + " .social.networks-4.center{margin-left:-75px}" + config.selector + " .social.networks-4.left{margin-left:162px}" + config.selector + " .social.networks-4.middle.left{margin-left:-250px}" + config.selector + " .social.networks-4 ul{width:240px}" + config.selector + " .social.networks-5{width:300px}" + config.selector + " .social.networks-5.center{margin-left:-105px}" + config.selector + " .social.networks-5.left{margin-left:-225px}" + config.selector + " .social.networks-5.middle.left{margin-left:-320px}" + config.selector + " .social.networks-5 ul{width:300px}" + config.selector + " .social.active{opacity:1;-webkit-transition:all .4s ease;transition:all .4s ease;visibility:visible}" + config.selector + " .social.active.top{-webkit-transform:scale(1) translateY(-10px);-ms-transform:scale(1) translateY(-10px);transform:scale(1) translateY(-10px)}" + config.selector + " .social.active.bottom{-webkit-transform:scale(1) translateY(15px);-ms-transform:scale(1) translateY(15px);transform:scale(1) translateY(15px)}" + config.selector + " .social.active.middle.right{-webkit-transform:scale(1) translateX(10px);-ms-transform:scale(1) translateX(10px);transform:scale(1) translateX(10px)}" + config.selector + " .social.active.middle.left{-webkit-transform:scale(1) translateX(-10px);-ms-transform:scale(1) translateX(-10px);transform:scale(1) translateX(-10px)}" + config.selector + " .social ul{position:relative;left:0;right:0;height:46px;color:#fff;margin:auto;padding:0;list-style:none}" + config.selector + " .social ul li{font-size:20px;cursor:pointer;width:60px;margin:0;padding:12px 0;text-align:center;float:left;display:none;height:22px;position:relative;z-index:2;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-transition:all .3s ease;transition:all .3s ease}" + config.selector + " .social ul li:hover{color:rgba(0,0,0,.5)}" + config.selector + " .social li[class*=facebook]{background:#3b5998;display:" + config.networks.facebook.display + "}" + config.selector + " .social li[class*=twitter]{background:#6cdfea;display:" + config.networks.twitter.display + "}" + config.selector + " .social li[class*=gplus]{background:#e34429;display:" + config.networks.google_plus.display + "}" + config.selector + " .social li[class*=pinterest]{background:#c5282f;display:" + config.networks.pinterest.display + "}" + config.selector + " .social li[class*=paper-plane]{background:#42c5b0;display:" + config.networks.email.display + "}"
        };
        var ShareUtils;
        "classList" in document.documentElement || !Object.defineProperty || "undefined" == typeof HTMLElement || Object.defineProperty(HTMLElement.prototype, "classList", {
            get: function() {
                var t, e, o;
                return o = function(t) {
                    return function(o) {
                        var n, i;
                        n = e.className.split(/\s+/), i = n.indexOf(o), t(n, i, o), e.className = n.join(" ")
                    }
                }, e = this, t = {
                    add: o(function(t, e, o) {
                        ~e || t.push(o)
                    }),
                    remove: o(function(t, e) {
                        ~e && t.splice(e, 1)
                    }),
                    toggle: o(function(t, e, o) {
                        ~e ? t.splice(e, 1) : t.push(o)
                    }),
                    contains: function(t) {
                        return !!~e.className.split(/\s+/).indexOf(t)
                    },
                    item: function(t) {
                        return e.className.split(/\s+/)[t] || null
                    }
                }, Object.defineProperty(t, "length", {
                    get: function() {
                        return e.className.split(/\s+/).length
                    }
                }), t
            }
        }), String.prototype.to_rfc3986 = function() {
            var t;
            return t = encodeURIComponent(this), t.replace(/[!'()*]/g, function(t) {
                return "%" + t.charCodeAt(0).toString(16)
            })
        }, ShareUtils = function() {
            function t() {}
            return t.prototype.extend = function(t, e, o) {
                var n, i;
                for (i in e) n = void 0 !== t[i], n && "object" == typeof e[i] ? this.extend(t[i], e[i], o) : (o || !n) && (t[i] = e[i])
            }, t.prototype.hide = function(t) {
                return t.style.display = "none"
            }, t.prototype.show = function(t) {
                return t.style.display = "block"
            }, t.prototype.has_class = function(t, e) {
                return t.classList.contains(e)
            }, t.prototype.add_class = function(t, e) {
                return t.classList.add(e)
            }, t.prototype.remove_class = function(t, e) {
                return t.classList.remove(e)
            }, t.prototype.is_encoded = function(t) {
                return t = t.to_rfc3986(), decodeURIComponent(t) !== t
            }, t.prototype.encode = function(t) {
                return "undefined" == typeof t || this.is_encoded(t) ? t : t.to_rfc3986()
            }, t.prototype.popup = function(t, e) {
                var o, n, i, r;
                return null == e && (e = {}), n = {
                    width: 500,
                    height: 350
                }, n.top = screen.height / 2 - n.height / 2, n.left = screen.width / 2 - n.width / 2, i = function() {
                    var t;
                    t = [];
                    for (o in e) r = e[o], t.push("" + o + "=" + this.encode(r));
                    return t
                }.call(this).join("&"), i && (i = "?" + i), window.open(t + i, "targetWindow", "toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=" + n.left + ",top=" + n.top + ",width=" + n.width + ",height=" + n.height)
            }, t
        }();
        var Share, __hasProp = {}.hasOwnProperty,
            __extends = function(t, e) {
                function o() {
                    this.constructor = t
                }
                for (var n in e) __hasProp.call(e, n) && (t[n] = e[n]);
                return o.prototype = e.prototype, t.prototype = new o, t.__super__ = e.prototype, t
            };
        Share = function(t) {
            function e(t, e) {
                return this.element = t, this.el = {
                    head: document.getElementsByTagName("head")[0],
                    body: document.getElementsByTagName("body")[0]
                }, this.config = {
                    enabled_networks: 0,
                    protocol: -1 === ["http", "https"].indexOf(window.location.href.split(":")[0]) ? "https://" : "//",
                    url: window.location.href,
                    caption: null,
                    title: this.default_title(),
                    image: this.default_image(),
                    description: this.default_description(),
                    ui: {
                        flyout: "top center",
                        button_text: "Share",
                        button_font: !0,
                        icon_font: !0
                    },
                    networks: {
                        google_plus: {
                            enabled: !0,
                            url: null
                        },
                        twitter: {
                            enabled: !0,
                            url: null,
                            description: null
                        },
                        facebook: {
                            enabled: !0,
                            load_sdk: !0,
                            url: null,
                            app_id: null,
                            title: null,
                            caption: null,
                            description: null,
                            image: null
                        },
                        pinterest: {
                            enabled: !0,
                            url: null,
                            image: null,
                            description: null
                        },
                        email: {
                            enabled: !0,
                            title: null,
                            description: null
                        }
                    }
                }, this.setup(t, e), this
            }
            return __extends(e, t), e.prototype.setup = function(t, e) {
                var o, n, i, r, s;
                for (i = document.querySelectorAll(t), this.extend(this.config, e, !0), this.set_global_configuration(), this.normalize_network_configuration(), this.config.ui.icon_font && this.inject_icons(), this.config.ui.button_font && this.inject_fonts(), this.config.networks.facebook.enabled && this.config.networks.facebook.load_sdk && this.inject_facebook_sdk(), o = r = 0, s = i.length; s > r; o = ++r) n = i[o], this.setup_instance(t, o)
            }, e.prototype.setup_instance = function(t, e) {
                var o, n, i, r, s, c, l, a, p = this;
                for (n = document.querySelectorAll(t)[e], this.hide(n), this.add_class(n, "sharer-" + e), n = document.querySelectorAll(t)[e], this.inject_css(n), this.inject_html(n), this.show(n), i = n.getElementsByTagName("label")[0], o = n.getElementsByClassName("social")[0], s = n.getElementsByTagName("li"), this.add_class(o, "networks-" + this.config.enabled_networks), i.addEventListener("click", function() {
                        return p.event_toggle(o)
                    }), p = this, a = [], e = c = 0, l = s.length; l > c; e = ++c) r = s[e], a.push(r.addEventListener("click", function() {
                    return p.event_network(n, this), p.event_close(o)
                }));
                return a
            }, e.prototype.event_toggle = function(t) {
                return this.has_class(t, "active") ? this.event_close(t) : this.event_open(t)
            }, e.prototype.event_open = function(t) {
                return this.has_class(t, "load") && this.remove_class(t, "load"), this.add_class(t, "active")
            }, e.prototype.event_close = function(t) {
                return this.remove_class(t, "active")
            }, e.prototype.event_network = function(t, e) {
                var o;
                return o = e.getAttribute("data-network"), this.hook("before", o, t), this["network_" + o](), this.hook("after", o, t)
            }, e.prototype.open = function() {
                return this["public"]("open")
            }, e.prototype.close = function() {
                return this["public"]("close")
            }, e.prototype.toggle = function() {
                return this["public"]("toggle")
            }, e.prototype["public"] = function(t) {
                var e, o, n, i, r, s, c;
                for (s = document.querySelectorAll(this.element), c = [], o = i = 0, r = s.length; r > i; o = ++i) n = s[o], e = n.getElementsByClassName("social")[0], c.push(this["event_" + t](e));
                return c
            }, e.prototype.network_facebook = function() {
                return this.config.networks.facebook.load_sdk ? window.FB ? FB.ui({
                    method: "feed",
                    name: this.config.networks.facebook.title,
                    link: this.config.networks.facebook.url,
                    picture: this.config.networks.facebook.image,
                    caption: this.config.networks.facebook.caption,
                    description: this.config.networks.facebook.description
                }) : console.error("The Facebook JS SDK hasn't loaded yet.") : this.popup("https://www.facebook.com/sharer/sharer.php", {
                    u: this.config.networks.facebook.url
                })
            }, e.prototype.network_twitter = function() {
                return this.popup("https://twitter.com/intent/tweet", {
                    text: this.config.networks.twitter.description,
                    url: this.config.networks.twitter.url
                })
            }, e.prototype.network_google_plus = function() {
                return this.popup("https://plus.google.com/share", {
                    url: this.config.networks.google_plus.url
                })
            }, e.prototype.network_pinterest = function() {
                return this.popup("https://www.pinterest.com/pin/create/button", {
                    url: this.config.networks.pinterest.url,
                    media: this.config.networks.pinterest.image,
                    description: this.config.networks.pinterest.description
                })
            }, e.prototype.network_email = function() {
                return this.popup("mailto:", {
                    subject: this.config.networks.email.title,
                    body: this.config.networks.email.description
                })
            }, e.prototype.inject_icons = function() {
                return this.inject_stylesheet("https://www.sharebutton.co/fonts/v2/entypo.min.css")
            }, e.prototype.inject_fonts = function() {
                return this.inject_stylesheet("http://fonts.googleapis.com/css?family=Lato:900&text=" + this.config.ui.button_text)
            }, e.prototype.inject_stylesheet = function(t) {
                var e;
                return this.el.head.querySelector('link[href="' + t + '"]') ? void 0 : (e = document.createElement("link"), e.setAttribute("rel", "stylesheet"), e.setAttribute("href", t), this.el.head.appendChild(e))
            }, e.prototype.inject_css = function(t) {
                var e, o, n, i;
                return n = "." + t.getAttribute("class").split(" ").join("."), this.el.head.querySelector("meta[name='sharer" + n + "']") ? void 0 : (this.config.selector = n, e = getStyles(this.config), i = document.createElement("style"), i.type = "text/css", i.styleSheet ? i.styleSheet.cssText = e : i.appendChild(document.createTextNode(e)), this.el.head.appendChild(i), delete this.config.selector, o = document.createElement("meta"), o.setAttribute("name", "sharer" + n), this.el.head.appendChild(o))
            }, e.prototype.inject_html = function(t) {
                return t.innerHTML = "<label class='entypo-export'><span>" + this.config.ui.button_text + "</span></label><div class='social load " + this.config.ui.flyout + "'><ul><li class='entypo-pinterest' data-network='pinterest'></li><li class='entypo-twitter' data-network='twitter'></li><li class='entypo-facebook' data-network='facebook'></li><li class='entypo-gplus' data-network='google_plus'></li><li class='entypo-paper-plane' data-network='email'></li></ul></div>"
            }, e.prototype.inject_facebook_sdk = function() {
                var t, e;
                return window.FB || !this.config.networks.facebook.app_id || this.el.body.querySelector("#fb-root") ? void 0 : (e = document.createElement("script"), e.text = "window.fbAsyncInit=function(){FB.init({appId:'" + this.config.networks.facebook.app_id + "',status:true,xfbml:true})};(function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n)){return}r=e.createElement(t);r.id=n;r.src='" + this.config.protocol + "connect.facebook.net/en_US/all.js';i.parentNode.insertBefore(r,i)})(document,'script','facebook-jssdk')", t = document.createElement("div"), t.id = "fb-root", this.el.body.appendChild(t), this.el.body.appendChild(e))
            }, e.prototype.hook = function(t, e, o) {
                var n, i;
                n = this.config.networks[e][t], "function" == typeof n && (i = n.call(this.config.networks[e], o), void 0 !== i && (i = this.normalize_filter_config_updates(i), this.extend(this.config.networks[e], i, !0), this.normalize_network_configuration()))
            }, e.prototype.default_title = function() {
                var t;
                return (t = document.querySelector('meta[property="og:title"]') || document.querySelector('meta[name="twitter:title"]')) ? t.getAttribute("content") : (t = document.querySelector("title")) ? t.innerText : void 0
            }, e.prototype.default_image = function() {
                var t;
                return (t = document.querySelector('meta[property="og:image"]') || document.querySelector('meta[name="twitter:image"]')) ? t.getAttribute("content") : void 0
            }, e.prototype.default_description = function() {
                var t;
                return (t = document.querySelector('meta[property="og:description"]') || document.querySelector('meta[name="twitter:description"]') || document.querySelector('meta[name="description"]')) ? t.getAttribute("content") : ""
            }, e.prototype.set_global_configuration = function() {
                var t, e, o, n, i, r;
                i = this.config.networks, r = [];
                for (e in i) {
                    n = i[e];
                    for (o in n) null == this.config.networks[e][o] && (this.config.networks[e][o] = this.config[o]);
                    this.config.networks[e].enabled ? (t = "block", this.config.enabled_networks += 1) : t = "none", r.push(this.config.networks[e].display = t)
                }
                return r
            }, e.prototype.normalize_network_configuration = function() {
                return this.config.networks.facebook.app_id || (this.config.networks.facebook.load_sdk = !1), this.is_encoded(this.config.networks.twitter.description) || (this.config.networks.twitter.description = encodeURIComponent(this.config.networks.twitter.description)), "number" == typeof this.config.networks.facebook.app_id ? this.config.networks.facebook.app_id = this.config.networks.facebook.app_id.toString() : void 0
            }, e.prototype.normalize_filter_config_updates = function(t) {
                return this.config.networks.facebook.app_id !== t.app_id && (console.warn("You are unable to change the Facebook app_id after the button has been initialized. Please update your Facebook filters accordingly."), delete t.app_id), this.config.networks.facebook.load_sdk !== t.load_sdk && (console.warn("You are unable to change the Facebook load_sdk option after the button has been initialized. Please update your Facebook filters accordingly."), delete t.app_id), t
            }, e
        }(ShareUtils);
        return Share;
    });
}



! function() {
    function b() {
        var b = a.cookie.find("springbot_redirect_queue"),
            c = a.cookie.find("cart"),
            d = c + ":" + b;
        if (void 0 !== c && void 0 !== b && a.cookie.find("_sb_token_sent") !== d) {
            var e = document.createElement("div");
            e.innerHTML = '<img src="https://prod-shopify-etl.herokuapp.com/actions/cart?shop=' + Shopify.shop + "&redirects=" + b + "&token=" + c + '" style="position:absolute; visibility:hidden"></div>', document.body.appendChild(e), a.cookie.create("_sb_token_sent", d)
        }
        var f = a.cookie.find("sb_sent_email");
        if ("undefined" != typeof f) {
            var g = a.cookie.find("cart"),
                h = a.cookie.find("sb_sent_token"),
                i = "undefined" != typeof h,
                j = "undefined" != typeof g,
                k = document.createElement("div");
            if (j && h !== g) k.innerHTML = '<img src="https://prod-shopify-etl.herokuapp.com/actions/email?shop=' + Shopify.shop + "&token=" + g + "&email=" + f + '" style="position:absolute; visibility:hidden"></div>', document.body.appendChild(k), a.cookie.create("sb_sent_token", g);
            else if (!i) {
                var l = new XMLHttpRequest;
                l.open("GET", "/cart.json"), l.send(null), l.onreadystatechange = function() {
                    var b = 4,
                        c = 200;
                    if (l.readyState === b && l.status === c) {
                        var d = JSON.parse(l.responseText);
                        k.innerHTML = '<img src="https://prod-shopify-etl.herokuapp.com/actions/email?shop=' + Shopify.shop + "&token=" + d.token + "&email=" + f + '" style="position:absolute; visibility:hidden"></div>', document.body.appendChild(k), a.cookie.create("sb_sent_token", d.token)
                    }
                }
            }
        }
    }

    function c(a, b, c) {
        return a.attachEvent ? a.attachEvent("on" + b, c) : a.addEventListener(b, c, !1)
    }
    var a = a || {};
    if (a.cookie = function() {
            return {
                find: function(a) {
                    var b, c, d, e = document.cookie.split(";");
                    for (b = 0; b < e.length; b++)
                        if (c = e[b].substr(0, e[b].indexOf("=")), d = e[b].substr(e[b].indexOf("=") + 1), c = c.replace(/^\s+|\s+$/g, ""), c == a) return unescape(d)
                },
                create: function(a, b, c) {
                    var d = new Date,
                        e = "undefined" == typeof c ? 31536e6 : 1e3 * c,
                        f = new Date(d.getTime() + e),
                        g = b + ";expires=" + f.toGMTString() + ";path=/";
                    document.cookie = a + "=" + g
                }
            }
        }(), a.util = function() {
            return {
                getQueryParam: function(a) {
                    return decodeURIComponent((new RegExp("[?|&]" + a + "=([^&;]+?)(&|#|;|$)").exec(location.search) || [, ""])[1].replace(/\+/g, "%20")) || null
                },
                arrayContains: function(a, b) {
                    for (var c = a.length; c--;)
                        if (a[c] == b) return !0;
                    return !1
                }
            }
        }(), a.redirect = function() {
            return {
                c_name: "springbot_redirect_queue",
                params: ["sb", "redirect_mongo_id"],
                run: function() {
                    this.cleanMalformed();
                    for (var b = 0; b < this.params.length; b++) {
                        var c = a.util.getQueryParam(this.params[b]);
                        c && this.appendValue(c)
                    }
                },
                cleanMalformed: function() {
                    var a = this.getCookie();
                    if ("undefined" != typeof a) {
                        var b = a.replace(/\%(25)+7/g, "|");
                        this.setCookie(b)
                    }
                },
                appendValue: function(b) {
                    var c = this.explodeCookie();
                    a.util.arrayContains(c, b) || c.push(encodeURI(b));
                    var d = c.join("|");
                    this.setCookie(d)
                },
                explodeCookie: function(a) {
                    var a = this.getCookie();
                    return a ? a.split("|") : new Array
                },
                setCookie: function(b) {
                    a.cookie.create(this.c_name, b)
                },
                getCookie: function() {
                    return a.cookie.find(this.c_name)
                }
            }
        }(), a.redirect.run(), b(), c(document, "click", function() {
            b()
        }), "undefined" != typeof Shopify && "undefined" != typeof Shopify.checkout && "undefined" != typeof Shopify.checkout.order_id && "undefined" != typeof Shopify.checkout.total_price) {
        adroll_conversion_value_in_dollars = Shopify.checkout.total_price, adroll_custom_data = {
            ORDER_ID: Shopify.checkout.order_id
        };
        var d = document.createElement("div");
        d.innerHTML = '<img src="https://prod-shopify-etl.herokuapp.com/actions/success?shop=' + Shopify.shop + "&pageurl=" + window.location.href + '" style="position:absolute; visibility:hidden"></div>', document.body.appendChild(d)
    }
    c(document, "keyup", function() {
        var b = event.target,
            c = b.getAttribute("class") || "";
        if ("email" === b.getAttribute("type") || c.indexOf("email") > -1) {
            var d = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (d.test(b.value)) {
                var e = b.value;
                a.cookie.create("sb_sent_email", e)
            }
        }
    })
};
</script>
</html>