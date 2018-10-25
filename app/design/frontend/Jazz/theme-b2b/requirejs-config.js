var config = {

    deps: [

        "js/dataTables.responsive.min",
        "js/main"
    ],


    map: {   
            '*': {
                "datatables.net":"js/dataTables.min",
            }
    },
    paths : {
                'bootstrap':'bootstrap/js/bootstrap.min'
    }, 
    shim: {
        'jquery' : {
            exports: 'jquery'
        },        
        'bootstrap': {
            deps: ['jquery']
        }  
    }

};