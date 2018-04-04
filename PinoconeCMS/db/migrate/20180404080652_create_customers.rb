class CreateCustomers < ActiveRecord::Migration[5.1]
  def change
    create_table :customers do |t|
      t.integer :cid
      t.string :cname

      t.timestamps
    end
  end
end
