class Channel < ActiveRecord::Base
  attr_accessible :conn_type, :ip_address, :location_id, :name, :port, :status, :streaming_url, :streaming_type

  belongs_to :location

  validates_presence_of :ip_address, :location_id, :name, :port

  has_many :favorites
  has_many :users, through: :favorites

  def self.asc_name(current_page)
  	order("name")
  end
end
