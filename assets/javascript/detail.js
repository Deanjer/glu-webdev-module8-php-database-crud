const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
  });
  // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
  let prodvalue = params.prod; // "some_value"
  let prijsvalue = params.prijs;
  let vnaamvalue = params.vnaam;
  let tnaamvalue = params.tnaam;
  let anaamvalue = params.anaam;
  let wplaatsvalue = params.wplaats;
  let straatvalue = params.straat;
  let hnummervalue = params.hnummer;
  let tnummervalue = params.tnummer;
  let emailvalue = params.email;
  let rekeningvalue = params.rekening;
  let productvalue = params.product;
//   alert(prodvalue)

  
console.log(params)

  let vnaam = document.getElementById('vnaam');
  vnaam.innerHTML=vnaamvalue

  let tnaam = document.getElementById('tnaam');
  tnaam.innerHTML=tnaamvalue

  let anaam = document.getElementById('anaam');
  anaam.innerHTML=anaamvalue

  let wplaats = document.getElementById('wplaats');
  wplaats.innerHTML=wplaatsvalue
  
  let straat = document.getElementById('straat');
  straat.innerHTML=straatvalue

  let hnummer = document.getElementById('hnummer');
  hnummer.innerHTML=hnummervalue

  let tnummer = document.getElementById('tnummer');
  tnummer.innerHTML=tnummervalue

  let email = document.getElementById('email');
  email.innerHTML=emailvalue

  let rekening = document.getElementById('rekening');
  rekening.innerHTML=rekeningvalue
  if(document.getElementById('producthidden')){
    let producthidden = document.getElementById('producthidden');
    producthidden.value=productvalue;
  }

  if(document.getElementById('product')){
    let product = document.getElementById('product');
    product.innerHTML=productvalue;
  }
 
