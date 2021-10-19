<!-- <x-header/> -->
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        :root{
	--padding: 10px;
	--text-color: #000;
	--border-radius: 5px;
	--border-width: 1px;
}

* {
		box-sizing: border-box;
}

body {
		padding: var(--padding);
		min-width: 320px;
}

header {
    width: 1000px;
    margin: 0 auto;
    padding: 0 var(--padding);
    max-width: 100%;
}
 .main {
    width: 1000px;
    margin: 0 auto;
    padding: 0 var(--padding);
    max-width: 100%;
}

button, select, input {
    color: var(--text-color);
    border-radius: var(--border-radius);
	border: none;
		border-color: #000;
		cursor: pointer;
		min-height: 30px;
		padding: 10px;
	background: #34299d;
	color: #fff;

    & + button {
        margin-left: 4px;
    }
}

.Hamburger {
    position: relative;

    & > button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: none;
        border: none;
        padding: 0;
        position: relative;

        width: 40px;
        height: 24px;
        align-items: flex-start;
        cursor: pointer;
        display: none;
        z-index: 2;

        @media screen and (max-width: 767px) {
            display: flex;
        }
    }

    &__inner {
        position: absolute;
        width: 40px;
        height: 4px;
        top: 0;
        transition-timing-function: ease;
        transition-duration: .15s;
        transition-property: transform;
        border-radius: var(--border-radius);
        background-color: #333;

        &:after, &:before {
            content: '';
            position: absolute;
            left: 0;
            width: 40px;
            height: 4px;
            transition-timing-function: ease;
            transition-duration: .15s;
            transition-property: transform;
            border-radius: var(--border-radius);
            background-color: #333;
        }

        &:before {
            top: 10px;
        }

        &:after {
            top: 20px;
        }
    }
}

.Menu {
    display: none;
    position: absolute;
    right: 100%;
    top: 100%;
    width: 240px;
    padding: 10px;
    background: #fff;
    color: #333;
    border-radius: 5px;
    border: 1px solid #333;
    z-index: 2;
    box-shadow: -1px 1px 2px 0px;

    &__heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
			margin-bottom: 10px;
    }

    &__content {
        display: flex;
        flex-direction: column;

        label {
            color: #333;
            border-radius: 5px;
            border: 2px solid #333;
            margin-bottom: 10px;
            padding: 10px;

            &:active {
                background: #fff;
                color: #333;
            }
        }
    }

    &__close {

    }

    &__title {
        font-size: 36px;
        flex-grow: 1;
    }
}

.Page {
    &__heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
				padding: 10px var(--padding);
				border-radius: var(--border-radius);
				position: relative;
    }

    &__button {
        @media screen and (max-width: 767px) {
            width: 100%;
            text-align: center;
        }
    }
	
	&__title {
		margin-right: 10px;
		font-weight: normal;
	}
}

.Tabs {
    position: relative;
    display: flex;
    flex-direction: column;
    margin: 25px 0;

    &__item {
        [type=radio] {
            display: none;
        }
				[type=radio]:not(:checked) ~ .Tabs__label {
            cursor: pointer;
        }
        [type=radio]:checked ~ .Tabs__label {
            background: white;
            border-right: 1px solid white;
            z-index: 2;
        }
        [type=radio]:checked ~ .Tabs__label ~ .Tabs__content {
            z-index: 1;
            display: block;
        }
    }

    &__content {
        display: none;
        box-sizing: border-box;
        width: 80%;
        position: absolute;
        top: 0;
        left: 20%;
        background: white;
        right: 0;
        padding: var(--padding);
				border-width: var(--border-width);
				border-radius: var(--border-radius);
				border-style: solid;
        min-height: 176px;

        @media screen and (max-width: 767px) {
            width: 100%;
            left: 0;
						position: relative;
        }
    }

    &__label {
        box-sizing: border-box;
        display: block;
        width: 20%;
        background: #eee;
        padding: 10px;
        border-width: var(--border-width);
				border-style: solid;
        position: relative;
        top: 20px;
        right: -2px;
        margin-bottom: 5px;
				border-top-left-radius: var(--border-radius);
    		border-bottom-left-radius: var(--border-radius);

        @media screen and (max-width: 767px) {
            display: none;
        }
    }
}

.Table {
    display: table;
    width: 100%;
		border-radius: var(--border-radius);
    overflow: hidden;

    &__body {
        display: table-row-group;
        margin: 0;
        padding: 0;
    }

    &__row {
        display: table-row;
        padding: 0;
        margin: 0;

        @media screen and (min-width: 768px) {
            &:nth-child(2n) {
                background: #eee;
            }
        }

        @media screen and (max-width: 767px) {
            display: flex;
            flex-direction: column;
            border-bottom-width: var(--border-width);
					
					&:last-child {
						border: none;
					}
        }
    }

    &__cell, &__head {
        display: table-cell;
        box-sizing: border-box;
        padding: 5px 10px;
        position: relative;

        @media screen and (min-width: 768px) {
            //border-right: 1px solid #333;
        }

        &:last-child {
            border-right: none;
        }

        @media screen and (max-width: 767px) {
            display: flex;
            align-items: stretch;
            line-height: 28px;

            &:first-child {
                background-color: #ccc;
                line-height: 20px;
            }

            &:nth-child(2n) {
                background: #eee;
            }

            &:before {
                content: attr(data-mobile);
                border-right: 1px solid;
                min-width: 62px;
                margin: 0 5px;
            }
        }
    }

    &__heading {
        background-color: #463daa;
			color: #fff;
        display: table-header-group;
        font-weight: bold;

        @media screen and (max-width: 767px) {
            display: none;
        }
    }

    &__edit {
        display: none;
        ul {
            padding: 0;
            display: flex;
            list-style: none;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
					  margin: 0.5em 0;

            li {
							margin: 0.5em 0;
                @media screen and (max-width: 767px) {
                    width: 100%;
                    margin-bottom: 10px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                input, select {
                    flex-grow: 1;
                    margin-left: 5px;
                }

                button {
                    @media screen and (max-width: 767px) {
                        width: 100%;
                    }
                }
            }
        }
    }

    &__asc, &__desc {
        position: absolute;
        right: 5px;
        width: 0;
        height: 0;
        border-style: solid;
        cursor: pointer;
    }

    &__asc {
        border-width: 0 8px 8px 8px;
        border-color: transparent transparent #f5b7fc transparent;
        top: 5px;

        &:active, &:focus {
            border-color: transparent transparent #fff transparent;
        }
    }

    &__desc {
        border-width: 8px 8px 0 8px;
        border-color: #f5b7fc transparent transparent transparent;
        bottom: 5px;

        &:active, &:focus {
            border-color: #fff transparent transparent transparent;
        }
    }
}

    </style>
</head>
<body>
    

<header>
	<div class="Page__heading">
		<h1 class="Page__title">Product table</h1>
		<div class="Hamburger">
			<button type="button" class="js-menu-trigger">
				<span class="Hamburger__inner"></span>
			</button>
			<div class="Menu js-menu">
				<div class="Menu__heading">
					<div class="Menu__title">Menu</div>
					<div class="Menu__close">
						<button type="button" class="js-menu-close-trigger">
							<span>Close</span>
						</button>
					</div>
				</div>
				<div class="Menu__content js-menu-content"></div>
			</div>
		</div>
		<div class="Page__button">
			<button type="button" class="js-button-add">
				<span>Add Product</span>
			</button>
		</div>
	</div>
</header>
<div class="main">
	<div class="Tabs js-tabs">
		<div class="Tabs__item">
			<input type="radio" id="tab-1" name="tab" checked>
			<label for="tab-1" class="Tabs__label">Catalog</label>

			<div class="Tabs__content">
				<div class="Table__edit js-edit-table">
					<ul>
						<li>SKU: <span class="js-edit-sku"></span></li>
						<li>Name: <input type="text" name="name" class="js-edit-name"></li>
						<li>Stock:
							<select name="status" class="js-edit-stock">
								<option value="In Stock" selected="selected">In Stock</option>
								<option value="Out of Stock">Out of Stock</option>
							</select>
						</li>
						<li>Status:
							<select name="stock" class="js-edit-status">
								<option value="Enabled" selected="selected">Enabled</option>
								<option value="Disabled">Disabled</option>
							</select>
						</li>
						<li><button type="button" class="js-button-save"><span>Save</span></button></li>
					</ul>
				</div>
				<div class="Table" id="js-table-list">
					<div class="Table__heading">
						<ul class="Table__row">
							<li class="Table__head js-sort-sku">Sku <span class="Table__asc js-asc"></span><span class="Table__desc js-desc"></span></li>
							<li class="Table__head js-sort-name">Name <span class="Table__asc js-asc"></span><span class="Table__desc js-desc"></span></li>
							<li class="Table__head">Status</li>
							<li class="Table__head">Stock</li>
							<li class="Table__head">Actions</li>
						</ul>
					</div>
					<ul class="Table__body list">
					</ul>
				</div>
			</div>
		</div>

		<div class="Tabs__item">
			<input type="radio" id="tab-2" name="tab">
			<label for="tab-2" class="Tabs__label">Customer</label>

			<div class="Tabs__content">
				Customer
			</div>
		</div>

		<div class="Tabs__item">
			<input type="radio" id="tab-3" name="tab">
			<label for="tab-3" class="Tabs__label">Settings</label>
			<div class="Tabs__content">
				Settings
			</div>
		</div>
	</div>
</div>

<script>
    var ProductList = (function () {
    var options = {
        valueNames: [ 'sku', 'name', 'status', 'stock' ],
        item: '<li class="Table__row js-product-row"><div class="sku Table__cell" data-mobile="Sku"></div><div class="name Table__cell" data-mobile="Name"></div><div class="status Table__cell" data-mobile="Status"></div><div class="stock Table__cell" data-mobile="Stock"></div><div class="Table__cell" data-mobile="Actions"><button type="button" class="js-button-edit"><span>Edit</span></button><button type="button" class="js-button-remove"><span>Delete</span></button></div></li>'
    };

    var values = [
        { sku: 'product1', name:'Product 1', status: 'Enabled', stock: 'In Stock' },
        { sku: 'product2', name:'Product 2', status: 'Enabled', stock: 'Out of Stock' },
        { sku: 'product3', name:'Product 3', status: 'Enabled', stock: 'Out of Stock' },
        { sku: 'product4', name:'Product 4', status: 'Enabled', stock: 'Out of Stock' },
        { sku: 'product5', name:'Product 5', status: 'Enabled', stock: 'Out of Stock' },
        { sku: 'product6', name:'Product 6', status: 'Disabled', stock: 'In Stock' }
    ];

    var tableList = new List('js-table-list', options, values);

    var buttonEdit = $('.js-button-edit');
    var buttonRemove = $('.js-button-remove');
    var buttonSave = $('.js-button-save');
    var buttonAdd = $('.js-button-add');

    var sortSku = $('.js-sort-sku');
    var sortName = $('.js-sort-name');

    var editTable = $('.js-edit-table');

    var productRowClass = '.js-product-row';

    var fieldSKU = $('.js-edit-sku');
    var fieldName = $('.js-edit-name');
    var fieldStatus = $('.js-edit-status');
    var fieldStock = $('.js-edit-stock');

    return {
        init: function () {
            this.initEvents();
        },
        initEvents: function () {
            this.updateElementsBind();
            var _self = this;

            buttonAdd.click(function() {
                _self.clearFields();
                editTable.show();
            });

            buttonSave.click(function() {
                var item = tableList.get('sku', fieldSKU.text())[0];
                if (typeof item !== 'undefined') {
                    item.values({
                        sku: fieldSKU.text(),
                        name: fieldName.val(),
                        status: fieldStatus.val(),
                        stock: fieldStock.val()
                    });
                } else {
                    tableList.add({
                        sku: fieldSKU.text() + Math.floor(Math.random()*110000),
                        name: fieldName.val() ? fieldName.val() : 'Product default name',
                        status: fieldStatus.val(),
                        stock: fieldStock.val()
                    });
                }
                editTable.hide();
                _self.updateElementsBind();
            });

            sortSku.click(function(e){
                if ($(e.target).hasClass('js-asc')) {
                    tableList.sort('sku', { order: "asc" });
                } else {
                    tableList.sort('sku', { order: "desc" });
                }
            });

            sortName.click(function(e){
                if ($(e.target).hasClass('js-asc')) {
                    tableList.sort('name', { order: "asc" });
                } else {
                    tableList.sort('name', { order: "desc" });
                }
            });
        },
        clearFields: function () {
            var fieldSKU = $('.js-edit-sku').text('');
            var fieldName = $('.js-edit-name').val('');
            var fieldStatus = $('.js-edit-status');
            var fieldStock = $('.js-edit-stock');
        },
        updateElementsBind: function () {
            var _self = this;
            var buttonEdit = $('.js-button-edit');
            var buttonRemove = $('.js-button-remove');

            buttonEdit.click(function(){
                var fieldSkuVal = $(this).closest(productRowClass).find('.sku').text();
                var itemValues = tableList.get('sku', fieldSkuVal)[0].values();
                fieldSKU.text(itemValues.sku);
                fieldName.val(itemValues.name);
                $(".js-edit-stock option[value='" + itemValues.stock + "']").prop('selected', true);
                $(".js-edit-status option[value='" + itemValues.status + "']").prop('selected', true);

                editTable.show();
            });

            buttonRemove.click(function() {
                var fieldSkuVal = $(this).closest(productRowClass).find('.sku').text();
                tableList.remove('sku', fieldSkuVal);
                _self.clearFields();
                editTable.hide();
            });
        }
    }
})();

var Menu = (function () {
    var menuTrigger = $('.js-menu-trigger');
    var menuCloseTrigger = $('.js-menu-close-trigger');
    var menu = $('.js-menu');
    var menuContent = $('.js-menu-content');
    var tabs = $('.js-tabs');

    return {
        init: function () {
            this.copyMenu();
            this.initEvent();
        },
        initEvent: function () {
            menuTrigger.click(function(){
                menu.fadeIn();
            });
            menuCloseTrigger.click(function(e){
                e.stopPropagation();
                menu.fadeOut();
            });
        },
        copyMenu: function () {
            var menuItems = tabs.find('label');
            menuItems.clone().removeClass('Tabs__label').appendTo(menuContent);
        }
    }
})();
$(function(){
    ProductList.init();
    Menu.init();
});

<!--ROLL BACK-->
<a href="#" class="roll_back animate" id="roll_back"><i class="fa fa-angle-up"></i></a>



<!--JAVASCRIPT
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
-->

  //TOP NAVIGATION
function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
document.getElementById("roll_back").style.display = "block";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
document.getElementById("roll_back").style.display = "none";
}
}


</>
</body>

</html>