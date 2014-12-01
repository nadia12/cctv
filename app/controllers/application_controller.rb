class ApplicationController < ActionController::Base
  protect_from_forgery
  before_filter :authenticate_user!, :global

  rescue_from CanCan::AccessDenied do |exception|
    redirect_to root_url, :alert => exception.message
  end

  private
  def global
	  @loc_pub = Location.order("name")
	end

end
