app.service('myHttpService', ['$http', function($http){

    this.getJSON = function(url){

        return $http({

            method: 'get',
            url: url
        })
    }

    this.saveJSON = function(url, data){
        return $http({
            method: "post",
            url: url,
            data: {
                'json': JSON.stringify(data)
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
    }
}]);