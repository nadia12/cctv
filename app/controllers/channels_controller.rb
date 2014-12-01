class ChannelsController < InheritedResources::Base
	load_and_authorize_resource
	
  def index
  	@channels = Channel.order('name ASC').page(params[:page]).per(10)
  end

end