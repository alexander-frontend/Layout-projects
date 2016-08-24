app.controller('ListCustomers', ['$scope', 'myHttpService', function($scope, myHttpService){

    $scope.items = [];
    $scope.item = {};


    myHttpService.getJSON('json/data.json').then(function(response){
        if (response.data){
         var data = JSON.parse(JSON.parse(response.data)); 
         $scope.items = JSON.parse(data.json);
     };
 });


    $scope.addItem = function () {
        $scope.items.push({name: $scope.item.name, email: $scope.item.email, 
            telephone: $scope.item.telephone, street: $scope.item.street, 
            city: $scope.item.city, state: $scope.item.state, zip: $scope.item.zip, 
            address: $scope.item.address});
        $scope.item.name = $scope.item.email = '';

        var request = myHttpService.saveJSON('server/jsonsaver.php', $scope.items);

        request.success(function (data) {
        });

    };

    $scope.editItem = function(index){
        $scope.item = $scope.items[index];
        $scope.edit = true;

    };

    $scope.applyChanges = function(index){
        $scope.item = {};
        $scope.edit = false;

        var request = myHttpService.saveJSON('server/jsonsaver.php', $scope.items);

        request.success(function (data) {
        });
    };

    $scope.deleteItem = function(index){
        $scope.items.splice(index, 1);

        var request = myHttpService.saveJSON('server/jsonsaver.php', $scope.items);

        request.success(function (data) {
        });
    };
}]);

