<link rel="stylesheet" href="vendor/toastr/css/toastr.min.css">
<script src="vendor/toastr/js/toastr.min.js"></script>
<script src="js/plugins-init/toastr-init.js"></script>
<script type="text/javascript">
function alert_center(utga,type,url){
  if(type=="warning"){
    toastr.warning(utga, "Мэдэгдэл", {
        timeOut: 2000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-right",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        onHidden: function () {
          if(url!=null){
            location.href = url;
          }
        }
    })
  }
  if(type=="danger"){
    toastr.danger(utga, "Мэдэгдэл", {
        timeOut: 2000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-right",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        onHidden: function () {
          if(url!=null){
            location.href = url;
          }
        }
    })
  }
  if(type=="success"){
    toastr.success(utga, "Мэдэгдэл", {
        timeOut: 2000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-right",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        onHidden: function () {
          if(url!=null){
            location.href = url;
          }
        }
    })
  }
}
</script>
