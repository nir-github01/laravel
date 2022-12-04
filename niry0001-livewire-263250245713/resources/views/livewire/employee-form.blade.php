<div class="container">
    <form class="row g-3" style="margin-top: 5%">
        <div class="row">
            <div class="col">
              <input type="number" class="form-control" placeholder="id" aria-label="id">
            </div>
            <div class="col">
              <input type="number" class="form-control" placeholder="Company_id" aria-label="Company Id">
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputPostId" class="form-label">Post Id</label>
          <input type="number" class="form-control" id="inputPostId">
        </div>
        <div class="col-md-6">
            <label for="inputempId" class="form-label">Employee Id</label>
            <input type="number" class="form-control" id="inputempId">
          </div>
          <div class="col-md-6">
            <label for="inputempId" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="inputempname">
          </div>
        <div class="col-md-6">
          <label for="inputNumber" class="form-label">Number of Post</label>
          <input type="number" class="form-control" id="inputNumber">
        </div>
        <div class="col-12">
          <label for="empPost" class="form-label">Employee Post</label>
          <textarea type="text" class="form-control" id="empPost" placeholder="Employee Post"></textarea>
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">Description</label>
            <input type="text" class="form-control" id="inputRevenue" placeholder="Company Name">
          </div>
          <div class="col-12">
            <label for="inputRevenue" class="form-label">Post Url</label>
            <input type="url" class="form-control" id="inputRevenue" placeholder="post-url-path">
          </div>
        <div class="col-12">
          <label for="inputPost" class="form-label">Option</label>
          <input type="json" class="form-control" id="inputPost" placeholder="Company Post">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>    
</div>