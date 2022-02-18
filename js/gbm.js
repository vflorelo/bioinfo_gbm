function change_content(id_str){
    $(".btn-primary").each(function(){
      $(this).removeClass("btn-primary").addClass("btn-secondary");
      });
    $("#"+id_str).removeClass("btn-secondary").addClass("btn-primary");
    var iframe_source  = "" ;
    switch (id_str) {
        case "atg_00"   : iframe_source = "atglabs.html"                    ; break ;
        case "intro_00" : iframe_source = "databases.html#intro"            ; break ;
        case "intro_01" : iframe_source = "databases.html#formats"          ; break ;
        case "intro_02" : iframe_source = "databases.html#seq_storage"      ; break ;
        case "intro_03" : iframe_source = "databases.html#repos"            ; break ;
        case "intro_04" : iframe_source = "databases.html#nt_dbs"           ; break ;
        case "dna_00"   : iframe_source = "dna.html#alignments"             ; break ;
        case "dna_01"   : iframe_source = "dna.html#handling"               ; break ;
        case "dna_02"   : iframe_source = "dna.html#promoters"              ; break ;
        case "dna_03"   : iframe_source = "dna.html#oligos"                 ; break ;
        case "dna_04"   : iframe_source = "https://nc2.neb.com/NEBcutter2/" ; break ;
        case "dna_05"   : iframe_source = "exercises.html"                  ; break ;
      }
    $("#contents").attr("src",iframe_source);
    }
function show_db(db_type){
  var block_arr = document.getElementsByClassName("text_block") ;
  var link_arr  = document.getElementsByClassName("link_"+db_type) ;
  for (i=0; i<block_arr.length; i++){
    var cur_block = block_arr[i];
    cur_block.setAttribute("display","none") ;
    }
  for (j=0; j<link_arr.length; j++){
    var cur_link = link_arr[j];
    cur_link.setAttribute("display","block") ;
    }
  }
