class LocationsController < InheritedResources::Base
	load_and_authorize_resource
	
  def index
  	@locations = Location.order("name")
  end
end