class FavoritesController < InheritedResources::Base

  def up
  	fav = current_user.favorites.new(channel_id: params[:favorite][:channel_id], status: 'Favorite')
  	fav.save
  	redirect_to my_favorite_path, :notice => "You just set favorite CCTV" 
  end

  def down
  	current_user.favorites.where(channel_id: params[:favorite][:channel_id]).first.destroy

  	redirect_to my_favorite_path, :notice => "You just removed favorite CCTV" 
  end

end