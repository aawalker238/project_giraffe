<?php
$this->load->view('partials/head', ['title' => 'Add Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <h1>Add Product</h1>
    <div class="container col-md-">
        <form action="/admins/create" method="post">
            <p><label>Name:</label><input type="text" name="name"></p>
            <p><label>Price:</label><input type="number" name="price"></p>
            <p><label>Description:</label><textarea name="description"></textarea></p>
            <p><label>Category</label><select name="category">
                <?php
                foreach($categories as $category){
                    echo "<option value='$category'></option>";
                }
                ?>
            </select></p>
            <p><label>Or Create a New Category</label><input type="text" name="new_category"></p>
            <p><a id="cancel" class="btn btn-default" href="/admins/products">Cancel</a>
            <a id="preview" class="btn btn-success" href="/admins/preview">Preview</a>
            <input type="submit" value="Add Product" class="btn btn-primary"></p>
        </form>
    </div>
</div>