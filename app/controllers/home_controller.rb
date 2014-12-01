class HomeController < InheritedResources::Base

	def dashboard
		@channel_all = Channel.asc_name(params[:page])
	end

	def channel
		@channel_pub = Channel.where("location_id =?", params[:id])
		@loc_name = Location.find(params[:id])
	end

	def favorite
		 @favorite = current_user.favorites.where(user_id: current_user.id, status: 'Favorite')
	   @favorite_count = current_user.favorites.where(user_id: current_user.id, status: 'Favorite').count
	end

end