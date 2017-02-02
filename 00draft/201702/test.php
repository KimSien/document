<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8" />
   <title>設置サンプル - GMAPv3 - Directions - 2地点間のルート検索</title>
   <link rel="stylesheet" type="text/css" href="/content/css/gmapv3.css" />
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <script type="text/javascript">
      $(function(){
         /* waypts（最大8か所） */
         var ary=[
            "東京ソラマチ",
            "お台場",
            "東京ミッドタウン",
            "六本木ヒルズ",
            "赤坂サカス",
            "恵比寿ガーデンプレイス",
            "表参道ヒルズ",
            "渋谷ヒカリエ"
         ];
         var waypts=[];
         for (var i=0; i<ary.length; i++) {
            waypts.push({
               location:ary[i],
               stopover:true
            });
         }
         var renderFLG=false;
         var directionsDisplay;
         var directionsService=new google.maps.DirectionsService();
         var map,mode;
         var oldDirections=[];
         var currentDirections=null;
         var defaultStartSpot="東京駅";
         var defaultEndSpot="品川駅";
         var curStartSpot,curEndSpot;

         initialize();

         /* 地図初期化 */
         function initialize() {
            var myOptions={
               zoom:12,
               center: new google.maps.LatLng(35.654071,139.749838),//芝公園
               mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            /* 地図オブジェクト生成 */
            map=new google.maps.Map(document.getElementById("map"), myOptions);
            if(!renderFLG) render();
            $("#roots").empty();
            var s="";
            for(var i=0; i<ary.length; i++){
               if(i==0){
                  start=defaultStartSpot;
                  end=ary[i];
               }else if(i==(ary.length-1)){
                  start=ary[i];
                  end=defaultEndSpot;
               }else{
                  start=ary[i];
                  end=ary[i+1];
               }
               s+="<li><a href='#' rel='"+start+"==="+end+"'>"+start+"==="+end+"</a></li>";
            }
            $("#roots").empty().append(s);
            curStartSpot=defaultStartSpot;
            curEndSpot=defaultEndSpot;
            calcRoute();
         }
         /* ルート検索結果を描画 */
         function render(){
            //dbg("render:"+renderFLG);
            renderFLG=true;
            /* ルートをレンダリング */
            directionsDisplay=new google.maps.DirectionsRenderer({
               "map": map,
               "preserveViewport": true,
               "draggable": true
            });
            /* 右カラムにルート表示 */
            directionsDisplay.setPanel(document.getElementById("directions_panel"));
            /* 出発地点・到着地点マーカーが移動された時 */
            google.maps.event.addListener(directionsDisplay, 'directions_changed',function() {
               currentDirections=directionsDisplay.getDirections();
               var route=currentDirections.routes[0];
               var s="";
               for(var i=0; i<route.legs.length; i++) {
                  var routeSegment=i+1;
                  s+=route.legs[i].start_address+'to';
                  s+=route.legs[i].end_address+'\n';
                  s+=route.legs[i].distance.text;
               }
               //dbg("directions_changed:"+s);
            });
         }
         /* モード変更 */
         $("#mode").bind("change",function(){
            $(".button-group button").removeClass("active");
            calcRoute();
            $("#show").addClass("active");
         });
         /* ルート算出 */
         function calcRoute(){
            switch($("#mode").val()){
               case "driving":
                  mode=google.maps.DirectionsTravelMode.DRIVING;
                  break;
               case "bicycling":
                  mode=google.maps.DirectionsTravelMode.BICYCLING;
                  break;
               case "transit":
                  mode=google.maps.DirectionsTravelMode.TRANSIT;
                  break;
               case "walking":
                  mode=google.maps.DirectionsTravelMode.WALKING;
                  break;
            }
            if(!renderFLG) render();
            if(curStartSpot==defaultStartSpot && curEndSpot==defaultEndSpot){
               console.log("全ルート");
               //全ルート
               _waypts=waypts;
            }else{
               //一部ルート
               _waypts=[];
            }
            var request={
                 waypoints:_waypts,
                   optimizeWaypoints:true,
               origin:curStartSpot,      /* 出発地点 */
               destination:curEndSpot,      /* 到着地点 */
               travelMode:mode            /* 交通手段 */
            };
            /* ルート描画 */
            directionsService.route(request, function(response, status) {
               dbg(response);
               if (status==google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setDirections(response);
               }else{
                  alert("その交通手段はリクエスト結果がありません\nstatus:"+status);
               }
            });
         }
         /* 区間を選択した時 */
         $("#roots").on("click","a",function(e){
            var rel=$(this).attr("rel").split("===");
            curStartSpot=rel[0];
            curEndSpot=rel[1];
            calcRoute();
            return false;
         });
         /* ルート表示・非表示切り替え */
         $(".button-group button").click(function(e){
            $(".button-group button").removeClass("active");
            var id=$(this).attr("id");
            if(id=="show"){
               calcRoute();
               $(this).addClass("active");
            }else{
               $(this).addClass("active");
               reset();
            }
         });
         /* ルート削除 */
         function reset(){
            currentDirections=null;
            directionsDisplay.setMap(null);
            renderFLG=false;
         }
      });
      var dbg=function(str){
         try{
            if(window.console && console.log){
               console.log(str);
            }
         }catch(err){
            //alert("error:"+err);
         }
      }
   </script>
   <style>
      #map { float:left; width:70%; height:100%; }
      #side { float:right; width:30%; height:100%; }
      #side .inner { padding:10px; overflow:auto; }
   </style>
<link rel="stylesheet" type="text/css" href="/common/css/example.css"></head>
<body id='example3' class='example'><div class="ads" style="margin:32px auto;text-align:center;"></div><h1 class='h'><a href='/'>PHP &amp; JavaScript Room</a> :: 設置サンプル</h1>
<h3 class='h'>実行結果</h3>
   <h1>設置サンプル - GMAPv3 - Directions - 2地点間のルート検索</h2>
   <p>都内のお買いものスポットのルートを検索し、右カラムにルート検索結果を表示します。マーカーをドラッグすると、それぞれの地点を変更されます。右カラムにあるボタンでルートの表示・非表示、プルダウンでトラベルモード（自動車、自転車、電車、徒歩）を切り替えられます。</p>
   <div id="map"><!-- 地図の埋め込み表示 --></div>
   <div id="side">
      <div class="inner">
      <p>
         <label for="mode">モード：<select id="mode" name="mode">
            <option value="driving" selected>DRIVING（自動車）</option>
            <option value="bicycling">BICYCLING （自転車）</option>
            <option value="transit">TRANSIT（電車）</option>
            <option value="walking">WALKING（徒歩）</option>
         </select></label>
      </p>
      <div class="button-group">
         <button id="show" class="button active">ルート表示</button>
         <button id="hide" class="button">ルート非表示</button>
      </div>
      <ol id="roots">
      </ol>
      <div id="directions_panel" style="width:100%"></div>
   </div>
   </div><!-- #side -->
   <br clear="all" />
</body>
</html>
