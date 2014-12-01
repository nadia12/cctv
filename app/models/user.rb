class User < ActiveRecord::Base
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable and :omniauthable
  devise :database_authenticatable,
         :recoverable, :rememberable, :trackable, :validatable

  # Setup accessible (or protected) attributes for your model
  attr_accessible :email, :password, :password_confirmation, :remember_me, :profile_attributes, :roles
  # attr_accessible :title, :body
  has_one :profile,  as: :profileable, dependent: :destroy
  accepts_nested_attributes_for :profile

  has_many :favorites
  has_many :channels, through: :favorites

  # validates :password, presence: false
  # validates :password_confirmation, presence: false

end
