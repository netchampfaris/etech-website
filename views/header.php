<div id="header" class="container-fluid header hidden-xs">
  <div class="row">
    <div id="brand-logo" class="col-md-6 col-md-offset-2" style="cursor: pointer;">
			<img src="/images/etechlogo.svg">
      <h1 class="title">E-TECH ACADEMY</h1>
      <h4 class="subtitle"> Zeal For Knowledge</h4>
    </div>
    <div class="col-md-4 help-box">
      <h2>Need Help?</h2>
      <i class="fa fa-phone fa-2x animated infinite tada"></i>
      <a href="callto:#" id="call">+91-88985-26990</a>
    </div>
  </div>
</div>
<script>
  $(function () {
    $("#brand-logo").click(function (e) {
      e.preventDefault();
      window.location.href = "http://etech.com";
    })
  });
</script>
