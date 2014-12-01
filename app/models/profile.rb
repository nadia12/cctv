class Profile < ActiveRecord::Base
  attr_accessible :first_name, :last_name, :mobile_phone, :phone

  belongs_to :profileable, polymorphic: true
end
