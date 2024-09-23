$(document).ready(function () {
  // banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
  });

  // top sale owl carousel
  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // isotope filter
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
  });

  // filter items on button click
  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  // new phones owl carousel
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // blogs owl carousel
  $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });

  // // product qty section
  // let $qty_up = $(".qty .qty-up");
  // let $qty_down = $(".qty .qty-down");
  // // let $input = $(".qty .qty_input");

  // // click on qty up button
  // $qty_up.click(function (e) {
  //   let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
  //   if ($input.val() >= 1 && $input.val() <= 9) {
  //     $input.val(function (i, oldval) {
  //       return ++oldval;
  //     });
  //   }
  // });

  // // click on qty down button
  // $qty_down.click(function (e) {
  //   let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
  //   if ($input.val() > 1 && $input.val() <= 10) {
  //     $input.val(function (i, oldval) {
  //       return --oldval;
  //     });
  //   }
  // });
});

// Select all the qty up and qty down buttons
const qtyUpButtons = document.querySelectorAll(".qty .qty-up");
const qtyDownButtons = document.querySelectorAll(".qty .qty-down");

console.log(qtyUpButtons);

// Click event for qty up buttons
qtyUpButtons.forEach(button => {
  button.addEventListener("click", function () {
    const input = document.querySelector(`.qty_input[data-id='${this.dataset.id}']`);
    if(!input) return;
    let value = parseInt(input.value);
    if (value >= 1 && value <= 9) {
      input.value = value + 1;
    }
  });
});

// Click event for qty down buttons
qtyDownButtons.forEach(button => {
  button.addEventListener("click", function () {
    const input = document.querySelector(`.qty_input[data-id='${this.dataset.id}']`);
     if (!input) return;
    let value = parseInt(input.value);
    if (value > 1 && value <= 10) {
      input.value = value - 1;
    }
  });
});
