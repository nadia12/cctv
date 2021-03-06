class Location < ActiveRecord::Base
  attr_accessible :name

  has_many :channels

  validates_presence_of :name
  validates_uniqueness_of :name
end
