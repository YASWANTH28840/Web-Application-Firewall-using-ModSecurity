
window.onscroll = function() {
    myFunction()
  };
  
  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    if(scrolled%2!=0)
      document.querySelector(".tit h1").innerHTML="Demo on sql-injections & firewall";
  
  }
  
  
  
  AOS.init({
    disable: 'mobile'
  });
  
  AOS.init({
    disable: function () {
      var maxWidth = 800;
      return window.innerWidth < maxWidth;
    }
  });
  