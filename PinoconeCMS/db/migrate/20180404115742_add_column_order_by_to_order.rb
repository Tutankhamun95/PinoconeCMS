class AddColumnOrderByToOrder < ActiveRecord::Migration[5.1]
  def change
    add_column :orders, :order_by, :string 
  end
end
