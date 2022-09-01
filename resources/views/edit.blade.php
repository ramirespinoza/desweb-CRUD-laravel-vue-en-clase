<form method="POST" v-on:submit.prevent="updateCustomer(fillCustomer.id)">
<div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h4>Edit customer</h4>    
            <button type="button" class="btn-close"  aria-label="Close" id="close-modal" data-dismiss="modal"></button>
            
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" v-model="fillCustomer.name">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" v-model="fillCustomer.adress">
            </div>
            <div class="mb-3">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" v-model="fillCustomer.phoneNumber">
            </div>
            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
      </div>
    </div>
</div>
</form>