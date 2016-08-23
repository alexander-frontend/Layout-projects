function ListCustomers($scope) {

    $scope.item = {};

    $scope.items = [
        {name: 'Leite', email: 2, telephone: 423423, address: 'sfddsfsd', street : 'jhgjhgj', city : 'Kiev', state : 'hgjgh', zip : 'hjkhjk'},
        {name: 'Cerveja', email: 12, telephone: 23423432, address: 'hgjghj', street : 'jhgjhgj', city : 'Kiev', state : 'hgjgh', zip : 'hjkhjk'}
    ];

    $scope.adicionaItem = function () {
        $scope.items.push({name: $scope.item.name, email: $scope.item.email, 
            telephone: $scope.item.telephone, street: $scope.item.street, 
            city: $scope.item.city, state: $scope.item.state, zip: $scope.item.zip, 
            address: $scope.item.address});
        $scope.item.name = $scope.item.email = '';
    };

    $scope.editarItem = function(index){
        $scope.item = $scope.items[index];
        $scope.edit = true;
    };

    $scope.applyChanges = function(index){
        $scope.item = {};
        $scope.edit = false;
    };

    $scope.deleteItem = function(index){
        $scope.items.splice(index, 1);
    };
}