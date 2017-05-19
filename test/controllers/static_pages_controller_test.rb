require 'test_helper'

class StaticPagesControllerTest < ActionDispatch::IntegrationTest
  test "should get jigl" do
    get jigl_url
    assert_response :success
  end

end
