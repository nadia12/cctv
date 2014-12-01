class AddStreamingUrlAndStreamingType < ActiveRecord::Migration
  def change
    add_column :channels, :streaming_url, :string
    add_column :channels, :streaming_type, :string
  end
end
