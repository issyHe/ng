'use strict';

angular.module('com.ngnice.app').controller('ReaderCreateController', function ReaderCreateController(Reader,$http) {
  var vm = this;
  vm.submit = function (form) {
    $http({data:form,method:"POST",url : '/api/readers/index.php'}).then(function(res){
      console.log(res,'REEEE');
    })

    Reader.save(form,
      function (reader) {
        console.log(reader,'124');
      },
      function (resp) {
        console.log(resp.data,'125');
      }
    );
  };
});
