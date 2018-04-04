class Customer < ApplicationRecord
    has_many :talabs, dependent: :destroy
end
