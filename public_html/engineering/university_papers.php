<div id="university-qpapers" class="row card">
  <div>
    <h2 class="text-center">Mumbai University Question Papers</h2>
    <form class="form-horizontal col-md-4 col-md-offset-4">
        
        <div class="form-group">
          <!-- <label for="inputDept" class="col-sm-2 control-label">Department?</label> -->
          <div class="col-sm-12">
            <select id="qp-inputDept" class="form-control">
              <option selected disabled>Select Department</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <select id="qp-inputYear" class="form-control">
              <option selected disabled>Select year</option>
              <option value="fe">F.E</option>
              <option value="se">S.E</option>
              <option value="te">T.E</option>
              <option value="be">B.E</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <select id="qp-inputSem" class="form-control">
              <option selected disabled>Select semester</option>
            </select>
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="col-sm-12">
            <select id="qp-inputSub" class="form-control">
              <option selected disabled>Select subject</option>
            </select>
          </div>
        </div> -->
        <!-- <div class="form-group">
          <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-default">Get papers</button>
          </div>
        </div> -->
      </form>
    
    <div class="col-md-4 col-md-offset-4 qpapers-panel">
      
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
  var year, sem = null;
  var depts = ["computer", "extc", "electronics"];

  $.each(depts, function (index, value) {
    var option = $('<option>', { text: value.toUpperCase(), value: value });
    console.log(option);
    $('#qp-inputDept').append(option);
  });

  $("#qp-inputYear").on('change', function() {
    console.log(this.value);
    switch (this.value) {
      case "fe":
        $('#qp-inputSem').html("<option selected disabled>Select semester</option><option value='1'>Semester 1</option><option value='2'>Semester 2</option>");
        break;
      case "se":
        $('#qp-inputSem').html("<option selected disabled>Select semester</option><option value='3'>Semester 3</option><option value='4'>Semester 4</option>");
        break;
      case "te":
        $('#qp-inputSem').html("<option selected disabled>Select semester</option><option value='5'>Semester 5</option><option value='6'>Semester 6</option>");
        break;
      case "be":
        $('#qp-inputSem').html("<option selected disabled>Select semester</option><option value='7'>Semester 7</option><option value='8'>Semester 8</option>");
        break;
    }

    $('#qp-inputSem').prop('selectedIndex', 0);
    console.log($("qp-inputSem").value);
  });

  $("#qp-inputSem").on('change', function() {

    var dept = $("#qp-inputDept").val();
    var year = $("#qp-inputYear").val();
    var sem = $("#qp-inputSem").val();
    console.log(dept, year, sem);

    var table = $('<table>', { class: 'table table-hover' });
    var thead = $('<thead>').append($('<tr>').append($('<td>', { text: dept.toUpperCase() + ' Question Papers'.toUpperCase() })));
    var tbody = $('<tbody>');

    $.each(papers[dept+"-"+year+"-"+sem], function(index, value) {
      var tr = $('<tr>');
      var td = $('<td>');
      var a = $('<a>', { href: value.link, text: value.text, target: '_blank' });
      td.append(a);
      tr.append(td);
      tbody.append(tr);
    });

    table.append(thead);
    table.append(tbody);

    $('.qpapers-panel').empty();
    $('.qpapers-panel').append(table);

  });

  var papers = {
    "computer-se-3" : [{
      "text" : "ECCF March '12",
      "link" : "files/qpapers/eccf-march12.pdf"
    }] 
  }


});
</script>
