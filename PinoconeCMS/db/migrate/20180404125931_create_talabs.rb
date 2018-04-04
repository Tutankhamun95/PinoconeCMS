class CreateTalabs < ActiveRecord::Migration[5.1]
  def change
    create_table :talabs do |t|
      t.string :talab_name
      t.references :customer, foreign_key: true

      t.timestamps
    end
  end
end
