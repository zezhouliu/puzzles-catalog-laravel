<div class="row">
    <div class="col-xs-8">
        <h3>Create a faculty</h3>
        <hr/>
        <form role="form" method="patch" action="/faculty">
           <div class="form-group">
               <label>First Name</label>
               <input type="text" name="first_name" class="form-control" />
           </div>
           <div class="form-group">
               <label>Last Name</label>
               <textarea name="last_name" class="form-control"></textarea>
           </div>
           <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
