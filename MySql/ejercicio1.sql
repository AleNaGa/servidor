-- Listar producto, con su categoría (nombre de categoria) 
-- y su precio por unidad pero tan sólo 
-- de los productos que tengan un precio superior a la media de los productos de su categoría
Select products.ProductName, categories.CategoryName, products.UnitPrice from products, categories where products.categoryID = categories.CategoryID and unitPrice > (Select avg(p.UnitPrice) from products p where products.categoryID = p.categoryID);