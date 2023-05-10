<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product View</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <h3>Categories</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#" class="category-link" data-category="all">All</a></li>
          <li class="list-group-item"><a href="#" class="category-link" data-category="electronics">Electronics</a></li>
          <li class="list-group-item"><a href="#" class="category-link" data-category="clothing">Clothing</a></li>
          <li class="list-group-item"><a href="#" class="category-link" data-category="books">Books</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <h3>Products</h3>
        <div class="row" id="product-list">
          <!-- Product items will be displayed here -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    // Load all products on page load
    $(document).ready(function() {
      loadProducts('all');
    });

    // Handle category selection
    $('.category-link').click(function(e) {
      e.preventDefault();
      var category = $(this).data('category');
      loadProducts(category);
    });

    // Load products based on category
    function loadProducts(category) {
      // AJAX request to fetch products data
      $.ajax({
        url: 'fetch_products.php',
        type: 'POST',
        data: {category: category},
        dataType: 'json',
        success: function(response) {
          if (response.status == 'success') {
            // Clear existing product items
            $('#product-list').html('');

            // Append new product items
            $.each(response.data, function(index, product) {
              var itemHtml = '<div class="col-md-4">' +
                '<div class="card mb-4">' +
                '<div class="card-body">' +
                '<h5 class="card-title">' + product.name + '</h5>' +
                '<p class="card-text">' + product.description + '</p>' +
                '<p class="card-text">Price: $' + product.price + '</p>' +
                '</div>' +
                '</div>' +
                '</div>';
              $('#product-list').append(itemHtml);
            });
          } else {
            alert('Error fetching products!');
          }
        },
        error: function(xhr, status, error) {
          alert('Error fetching products!');
        }
      });
    }
  </script>
</body>
</html>
