<div id="university-syllabus" class="row card">
  <div>
    <h2 class="text-center">Mumbai University Syllabus</h2>
    <form class="form-horizontal col-md-4 col-md-offset-4">
      <div class="form-group">
        <!-- <label for="inputDept" class="col-sm-2 control-label">Department?</label> -->
        <div class="col-sm-12">
          <select id="inputDept" class="form-control">
            <option selected disabled>Select Department</option>
          </select>
        </div>
      </div>
      <!-- <div class="form-group">
        <div class="col-sm-offset- col-sm-12 text-center">
          <button type="submit" class="btn btn-default">Get syllabus</button>
        </div>
      </div> -->
    </form>
    
    <div class="col-md-4 col-md-offset-4 syllabus-panel">
      
    </div>
  </div>
</div>

<script type="text/javascript">
      
    $(function () {
      var syllabus = {
        "computer" : [
        {
          "text" : "Second Year", 
          "year" : "se",
          "link" : "files/syllabus/computer-se.pdf"
        },
        { 
          "text" : "Third Year", 
          "year" : "te",
          "link" : "files/syllabus/computer-te-be.pdf"
        },
        { 
          "text" : "Final Year", 
          "year" : "be",
          "link" : "files/syllabus/computer-te-be.pdf"
        }],
        "electronics" : [
        {
          "text" : "Second Year", 
          "year" : "se",
          "link" : "files/syllabus/electronics-se.pdf"
        },
        { 
          "text" : "Third Year", 
          "year" : "te",
          "link" : "files/syllabus/electronics-te.pdf"
        },
        { 
          "text" : "Final Year", 
          "year" : "be",
          "link" : "files/syllabus/electronics-be.pdf"
        }],
        "extc" : [
        {
          "text" : "Second Year", 
          "year" : "se",
          "link" : "files/syllabus/extc-se.pdf"
        },
        { 
          "text" : "Third Year", 
          "year" : "te",
          "link" : "files/syllabus/extc-te.pdf"
        },
        { 
          "text" : "Final Year", 
          "year" : "be",
          "link" : "files/syllabus/extc-be.pdf"
        }],
      }

      $.each(syllabus, function (index, value) {
        // console.log(index, value);
        var option = $('<option>', {value: index, text: index.toUpperCase()});
        $('#inputDept').append(option);
      });


      $("#inputDept").on('change', function () {
        var option = this.value;

        var table = $('<table>', { class: 'table table-hover' });
        var thead = $('<thead>').append($('<tr>').append($('<td>', { text: option.toUpperCase() + ' Engineering Syllabus'.toUpperCase() })));
        var tbody = $('<tbody>');

        $.each(syllabus[option], function(index, value) {
          var tr = $('<tr>');
          var td = $('<td>');
          var a = $('<a>', { href: value.link, text: value.text, target: '_blank' });
          td.append(a);
          tr.append(td);
          tbody.append(tr);
        });

        table.append(thead);
        table.append(tbody);

        $('.syllabus-panel').empty();
        $('.syllabus-panel').append(table);
      });
    });

</script>
