let dist, group, mainobj = {}
let getjson = function(){
let myRequest = new Request("https://api.covid19india.org/state_district_wise.json");
fetch(myRequest)
  .then(function(resp){
      return resp.json();
  })
  .then(function(data){
      mainobj = data;
  })
}
