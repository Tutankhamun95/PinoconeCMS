class CreateFoods < ActiveRecord::Migration[5.1]
  def change
    create_table :foods do |t|
      t.integer :fid
      t.string :fname
      t.integer :price

      t.timestamps
    end
  end
end
