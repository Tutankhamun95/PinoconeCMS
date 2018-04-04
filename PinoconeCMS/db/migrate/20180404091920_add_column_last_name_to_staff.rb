class AddColumnLastNameToStaff < ActiveRecord::Migration[5.1]
  def change
    rename_column :staffs, :name, :first_name 
  end
end
