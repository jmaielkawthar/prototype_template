$(function () {
    formSelectStyle();
});

// this fuction for styling  forms dropdown select
function formSelectStyle() {
    /* get the parent of select and add class name custom select */
    var select = document.querySelectorAll('select');
    select.forEach(inputElem => {
        var parentSelect = inputElem.parentNode;
        var newParent = document.createElement("DIV");
        newParent.setAttribute("class", "custom-select");
        parentSelect.insertBefore(newParent, inputElem);
        newParent.appendChild(inputElem);
    });
    selectStyle();
}

// this fuction for styling select option  in forms
function selectStyle() {
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.querySelectorAll(".custom-select");

    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        const myOpts = selElmnt.options;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            if (myOpts[j].value) {
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
            } else {
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.setAttribute("class", "placeholder");
                c.style.display = "none";
            }

            if (myOpts[j].value == 'none') {
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.setAttribute("class", "placeholder");
                c.style.display = "none";

                if (selElmnt.querySelector('optgroup')) {
                    c.setAttribute("class", "");
                    c.style.display = "block";
                }
            }
            c.setAttribute("class", "option");
            c.addEventListener("click", function (e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/

                var y, i, k, s, h;

                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;

                s.classList.add("selected");
                var opt = s.options[s.selectedIndex].innerHTML;

                for (i = 0; i < s.length; i++) {

                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }

                if ($(s).val() !== '') {
                    $(s).parent().removeClass('novalid');
                }
                h.click();

            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
            this.parentNode.classList.toggle("active");
            e.stopPropagation();
        });
    }
    keepSelectedItem = () => {
        var selected = $("option:selected");
        if (selected) {
            var selectedValue = selected.val();
            var options = selected.closest('.custom-select').find('.select-items .option');
            $(options).each(function (index, option) {
                var optionsValue = $(option).html();
                if (optionsValue === selectedValue) {
                    $(this).addClass("same-as-selected");
                }
            });
        }
        var indexSelected = $("option:selected").index();
        var scrollPosition = (indexSelected - 2) * 50.89;
        var handleScrollPosition = function () {
            if (selected.closest('.custom-select').find('.select-selected').hasClass('select-arrow-active')) {
                $('.select-items').css("overflow-y", "scroll");
                $('.select-items').scrollTop(scrollPosition);
            }
        };
        selected.closest('.custom-select').find('.select-selected').click(function () {
            handleScrollPosition();
        });

        handleScrollPosition();
    }

    selectSpecificMembers = () => {
        const selects = $(".filter-member-list .custom-select .select-items");
        const filterBtn = $('.filter-member-list .buttons-section .primary-button');
        const searchbutton = $(".filter-member-list").find("#searchbutton");

        selects.each((i, select) => {
            var childrens = $(select).children();
            var selectedItem = $(select).parent().find('.select-selected');
            var firstChild = childrens.eq(0);
            firstChild.css("display", "none");

            $(select).click(function () {
                if (selectedItem.text() == firstChild.text()) {
                    firstChild.css("display", "none");
                }
                else {
                    firstChild.css("display", "block");
                }
            });

            if ((selectedItem.text() == firstChild.text()) && (searchbutton.val() == 1)) {
                firstChild.css("display", "none");
            }
            else {
                firstChild.css("display", "block");
            }
            /* when we reload the page */
            const pageAccessedByReload = (
                (window.performance.navigation && window.performance.navigation.type === 1) ||
                window.performance
                    .getEntriesByType('navigation')
                    .map((nav) => nav.type)
                    .includes('reload')
            );
            if (pageAccessedByReload) {
                if (selectedItem.text() == firstChild.text()) {
                    firstChild.css("display", "none");
                }
                else {
                    firstChild.css("display", "block");
                }

            }
        })
    }
    $(document).ready(function () {
        selectSpecificMembers();
        keepSelectedItem();
    });
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");

        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)

            } else {
                y[i].classList.remove("select-arrow-active");
                y[i].parentNode.classList.remove("active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
}

