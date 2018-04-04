class Staff < ApplicationRecord
    validates :sname, :last_name, presence:true
end
