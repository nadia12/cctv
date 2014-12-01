class Favorite < ActiveRecord::Base
  attr_accessible :channel_id, :status, :user_id

  belongs_to :user
  belongs_to :channel
end
