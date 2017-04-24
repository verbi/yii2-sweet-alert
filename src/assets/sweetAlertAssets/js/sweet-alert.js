yii.confirm = function (message, okCallback, cancelCallback) {
   alert(okCallback);
   swal({
       title: message,
       type: 'warning',
       showCancelButton: true,
       closeOnConfirm: true,
       allowOutsideClick: true
   }, okCallback);
};
yii.alert = function (message) {
   swal({
       title: message,
       allowOutsideClick: true
   });
};
