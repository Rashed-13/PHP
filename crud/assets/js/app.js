document.addEventListener('DOMContentLoaded', function(){
    let cls = document.getElementsByClassName('delete');
    for(let i =0; i<cls.length; i++){
        cls[i].addEventListener('click', function(e){
            if(!confirm('Are you sure you want to delete?')){
                e.preventDefault();
            }
        })
    }
});

