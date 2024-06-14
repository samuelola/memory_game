("use strict");
function toastrErrorMsg(r) {
    setTimeout(function () {
      toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: "slideDown",
        timeOut: 1500,
      };
      toastr.error(r);
    }, 1000);
  }

  ("use strict");
function toastrSuccessMsg(r) {
  setTimeout(function () {
    toastr.options = {
      closeButton: true,
      progressBar: true,
      showMethod: "slideDown",
      timeOut: 1500,
      // onHidden: function () {
      //   window.location.reload();
      // },
    };
    toastr.success(r);
  }, 1000);
}