(function($){
    $(document).ready(function(){

    // theme start

    const ArrTheme = $("div[theme]")
    let Theme = "brown"

    function removeTheme(){
        ArrTheme.each(function() {
            $(this).removeClass( "active" )
        })
    }

    ArrTheme.each(function() {
        $(this).on('click', ()=> {
            removeTheme()
            $(this).addClass( "active" )
            $(".body-constructor").attr('class', "body-constructor " + $(this).attr("theme") )
            Theme = $(this).attr("theme")
        })
    })

    // theme end

     // del start
     function del_track (){
        let del_elements = $('button[data-del-target]')
        del_elements.each(function(){
            $(this).on('click', ()=>{
                let id = $(this).attr('data-del-target') 
                $(id).remove();
                del_track()
            })
        })
    }

    del_track()
    // del end

    // clone start
    let count = 0
    let clone_elements = $('button[data-clone-target]')

    clone_elements.each(function(){
        $(this).on('click', ()=>{
            count++ 
            let id = $(this).attr('data-clone-target')
            clone (id)
            clone_elements = $('button[data-clone-target]')

            console.log(clone_elements)
            $('#sortable .carousel').last().attr('id', id.slice(1) + "_copy_" + count)
            $('#sortable .carousel').last().find('button[data-bs-target]').attr('data-bs-target', id + "_copy_" + count)
            $('#sortable .carousel').last().find('button[data-clone-target]').remove()
            $('#sortable .carousel').last().find('button[data-del-target]').attr('data-del-target', id + "_copy_" + count)
        
            del_track()
        })
    })

    function clone (e){
        $(e).clone().appendTo("#sortable")
    }
    // clone end
    
    // assemble start

        let Data = []

        $("#assemble").on('click', ()=> {
            $(".load-file").toggleClass("load-file_active")
            $(".carousel-item").each(function() {
                if($(this).hasClass("active")){
                    Data[Data.length] = $(this).html()
                }
            })
            $.ajax({
                method: "POST",
                url: "/assemble.php",
                data: { Theme: Theme, Data: Data }
              })
            .done(function( data ) {
                window.location.href = '/load.php?zip=' + data + ".zip"
            })
            .done(function(){
                $(".load-file").toggleClass("load-file_active")
                Data = []
            })
        })


    // assemble end
});
})(jQuery);